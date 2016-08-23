<!-- Conteudo -->
<div class="conteudo">
<?php
	require_once 'init.php';
	include_once 'evento.class.php';
	
	 // pega os dados do formulário
	$local = isset($_POST['txtLocal']) ? $_POST['txtLocal'] : null;
	$palestrante = isset($_POST['txtPalestrante']) ? $_POST['txtPalestrante'] : null;
	$horario = isset($_POST['horario']) ? $_POST['horario'] : null;
	$tema = isset($_POST['txtTema']) ? $_POST['txtTema'] : null;
	$data = isset($_POST['txtData']) ? $_POST['txtData'] : null;	
	$descricao = isset($_POST['txtDescricao']) ? $_POST['txtDescricao'] : null;
	$classificacao = isset($_POST['txtClassificacao']) ? $_POST['txtClassificacao'] : null;
	 

	 // instancia objeto evento
	 $evento = new Evento($data, $local, $palestrante, $horario, $tema, $descricao, $classificacao);
	
	 
	 // insere no BD
	 $PDO = db_connect();
	 $sql ="INSERT INTO Evento(data, local, palestrante, horario, tema, descricao, classificacao) VALUES( :data, :local, :palestrante, :horario, :tema , :descricao , :classificacao)";
	 $stmt = $PDO->prepare($sql);
	 $stmt->bindParam( ':data' , $evento->getData());
	 $stmt->bindParam( ':local' , $evento->getLoc());
	 $stmt->bindParam( ':palestrante' , $evento->getPales());
	 $stmt->bindParam( ':horario' , $evento->getHor());
	 $stmt->bindParam( ':tema' , $evento->getTema());
	 $stmt->bindParam( ':descricao' , $evento->getDesc());
	 $stmt->bindParam( ':classificacao' , $evento->getClas());
	 
	
	 
	 
	
	 
	 if($stmt->execute())
	 {
		header('Location:index.php');
		
	 }
	 else
	 {
		 echo"Erro ao cadastrar evento.";
		 print_r($stmt->errorInfo());
	 }
	 
?>
</div>
