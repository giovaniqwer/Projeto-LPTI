<div class="conteudo">

<?php
	require_once 'init.php';
 	include_once 'evento.class.php';
 	
 			 // pega os dados do formulário
	$id = isset($_POST['id']) ? (int)$_POST['id'] : null;
	$data = isset($_POST['txtData']) ? (int)$_POST['txtData'] : null;
	$evento = isset($_POST['txtEvento']) ? $_POST['txtEvento'] : null;
	$local = isset($_POST['txtLocal']) ? $_POST['txtLocal'] : null;
	$palestrante = isset($_POST['txtPalestrante']) ? $_POST['txtPalestrante'] : null;
	$horario = isset($_POST['horario']) ? $_POST['horario'] : null;
	$tema = isset($_POST['txtTema']) ? $_POST['txtTema'] : null;
	$descricao = isset($_POST['txtDescricao']) ? $_POST['txtDescricao'] : null;
	$classificacao = isset($_POST['txtClassificacao']) ? $_POST['txtClassificacao'] : null;
	 
 		// instancia objeto aluno
 		 $evento = new evento($data, $local, $palestrante, $horario, $tema, $descricao, $classificacao);
	
 		// atualiza o BD
 		$PDO = db_connect();
 		$sql = "UPDATE Evento SET data = :data, local = :local, palestrante = :palestrante, horario= :horario, tema = :tema, descricao = :descricao, classificacao = :classificacao WHERE idEvento = :idEvento";
 		$stmt = $PDO-> prepare($sql);
 		$stmt->bindParam( ':data' , $evento->getData());
		$stmt->bindParam( ':local' , $evento->getLoc());
		$stmt->bindParam( ':palestrante' , $evento->getPales());
		$stmt->bindParam( ':horario' , $evento->getHor());
		$stmt->bindParam( ':tema' , $evento->getTema());
		$stmt->bindParam( ':descricao' , $evento->getDesc());
		$stmt->bindParam( ':classificacao' , $evento->getClas());
 		$stmt->bindParam( ':idEvento', $id,	PDO::PARAM_INT);

 		if ($stmt->execute())
 		{
 			header ('Location:index.html');
 		}
 		else
 		{
 			echo "Erro ao alterar";
 			print_r($stmt->errorInfo());
 		}
 		?>
</div>

