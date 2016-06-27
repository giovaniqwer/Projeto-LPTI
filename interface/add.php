<?php
 require_once 'init.php';
 include_once 'contatos-class.php';
 // pega os dados do formulário
 $nome = isset($_POST['txtNome']) ? $_POST['txtNome'] : null;
 $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;
 $comentario= isset($_POST['txtComentario']) ? $_POST['txtComentario'] : null;
 
 if (empty($nome) || empty($comentario) || empty($email)){
    echo "Campos devem ser preenchidos!!";
    exit;
 }
 
 $contato = new contatos($nome, $email, $comentario);

 // insere no BD
 $PDO = db_connect();
 $sql = "INSERT INTO contatos(nomeContato, emailContato, comentarioContato) VALUES(:nome, :email, :comentario)";
 $stmt = $PDO->prepare($sql);
 echo $nome;
 echo $email;
 echo $comentario;
 $stmt->bindParam(':nome', $contato->getNome());
 $stmt->bindParam(':email', $contato->getEmail());
 $stmt->bindParam(':comentario', $contato->getComentario());
 if($stmt->execute()){
    header ('Location: index.html');
 }else{
    echo "Erro ao cadastrar!!";
    print_r($stmt->errorInfo());
 }
?>