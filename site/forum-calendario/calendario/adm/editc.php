<div class="conteudo">

<?php
	require_once 'init.php';
 	include_once 'evento.class.php';
 	
 			 // pega os dados do formulário
	$id = isset($_POST['id']) ? (int)$_POST['id'] : null;
	$data = isset($_POST['txtNome']) ? (int)$_POST['txtNome'] : null;
	$evento = isset($_POST['txtCor']) ? $_POST['txtCor'] : null;
	 
 		// instancia objeto aluno
 		 $classificacao = new classificacao($nome, $cor);
	
 		// atualiza o BD
 		$PDO = db_connect();
 		$sql = "UPDATE Classificacao SET nome = :nome, cor = :cor WHERE idClassificacao = :idClassificacao";
 		$stmt = $PDO-> prepare($sql);
		$stmt->bindParam( ':nome' , $classificacao->getClass());
 		$stmt->bindParam( ':cor' , $classificacao->getCor());
 		$stmt->bindParam( ':idClassificacao', $id,	PDO::PARAM_INT);

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
