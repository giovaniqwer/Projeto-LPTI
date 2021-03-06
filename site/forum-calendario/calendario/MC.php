<?php
		require_once 'adm/init.php';
		$PDO = db_connect();
		$sql_count = "SELECT COUNT(*) AS total FROM Evento ORDER BY data ASC";
		$sql = "SELECT idEvento, data, local, palestrante, horario, tema, descricao, classificacao FROM Evento ORDER BY data ASC";
 
		$stmt_count = $PDO->prepare($sql_count);
		$stmt_count->execute();
		$total = $stmt_count->fetchColumn();
 
		$stmt= $PDO->prepare($sql);
		$stmt->execute();
		$info=array();
		$count = 0;
 while($evento = $stmt->fetch(PDO::FETCH_ASSOC)):
	$info[$count]['title']= $evento['tema'];
	$info[$count]['start']= $evento['data'];
	$d=explode("-",$evento['data']);
	$data=$d[2]."/".$d[1]."/".$d[0];
	$info[$count]['data']= $data;
	$info[$count]['id']= $evento['idEvento'];
	$info[$count]['palestrante']= $evento['palestrante'];
	$info[$count]['local']= $evento['local'];
	$h=explode(":",$evento['horario']);
	$horario=$h[0].":".$h[1];
	$info[$count]['horario']= $horario;	
	$info[$count]['descricao']= $evento['descricao'];
	$info[$count]['classificacao']= $evento['classificacao'];
	
	switch ($evento['classificacao']){
			case 'Extensão':
				$info[$count]['color']= '#d6e9c6';
				$info[$count]['textColor']= '#3c763d';
				break;
			case 'Pesquisa':	
				$info[$count]['color']= '#faebcc';
				$info[$count]['textColor']= '#8a6d3b';
				break;
			case 'Entretenimento':
				$info[$count]['color']= '#ebccd1';
				$info[$count]['textColor']= '#a94442';
				break;
			case 'Ensino':
				$info[$count]['color']= '#b3d9ff';
				$info[$count]['textColor']= '#0066cc';
			break;
			case 'Outros':
				$info[$count]['color']= '#ebc7eb';
				$info[$count]['textColor']= '#c969c9';
			break;
	}
	$count++;
endwhile;
echo json_encode($info);
?>
