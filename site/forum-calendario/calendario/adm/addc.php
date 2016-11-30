<!-- Conteudo -->
<div class="row">
<?php
	require_once 'init.php';
	include_once 'classificacao.class.php';
	
	
	 // pega os dados do formulário
			$nome = $_POST['txtNome'];  
			$cor = $_POST['txtCor'];
	
	 // instancia objeto evento
	 $classificacao = new Classificacao($nome, $cor);
	
	 
	 // insere no BD
	 $PDO = db_connect();
	 $sql ="INSERT INTO Classificacao(nome, cor) VALUES( :nome, :cor)";
	 $stmt = $PDO->prepare($sql);
	 $stmt->bindParam( ':nome' , $classificacao->getClass());
	 $stmt->bindParam( ':cor' , $classificacao->getCor());
	 
	
	 
	
	 
	 if($stmt->execute())
	 {
		header('Location:index.html');
		
	 }
	 else
	 {
		 echo"Erro ao cadastrar evento.";
		 print_r($stmt->errorInfo());
	 }
	 
?>
</div>
