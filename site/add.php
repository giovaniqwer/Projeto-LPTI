<?php

require_once 'init.php';
include_once 'contatos-class.php';
// pega os dados do formulário
$nome = isset($_POST['txtNome']) ? $_POST['txtNome'] : null;
$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;
$comentario = isset($_POST['txtComentario']) ? $_POST['txtComentario'] : null;
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y H:i');
$contato = new contatos($nome, $email, $comentario, $data);

// insere no BD
$PDO = db_connect();
$sql = "INSERT INTO contatos(nomeContato, emailContato, comentarioContato, data) VALUES(:nome, :email, :comentario, :data)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $contato->getNome());
$stmt->bindParam(':email', $contato->getEmail());
$stmt->bindParam(':comentario', $contato->getComentario());
$stmt->bindParam(':data', $contato->getData());
if ($stmt->execute()) {
    header('Location: index.html');
} else {
    echo "Erro ao cadastrar!!";
    print_r($stmt->errorInfo());
}
?>
