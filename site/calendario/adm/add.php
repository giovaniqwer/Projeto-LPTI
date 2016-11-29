<!-- Conteudo -->
<div class="row">
<?php
	require_once 'init.php';
	include_once 'evento.class.php';
	
	
	 // pega os dados do formulário
			$tema = $_POST['txtTema'];  
			$local = $_POST['txtLocal'];
			$palestrante = $_POST['txtPalestrante'];
			$horario = $_POST['horario'];
			$data =$_POST['txtData'];	
			$descricao = $_POST['txtDescricao'];
			$classificacao =$_POST['txtClassificacao'];   

	
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
