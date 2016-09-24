<?php

session_start();
require_once '../init.php';
include_once 'post-class.php';

// pega os dados do formulário

$idUser = $_SESSION["emailID"];
date_default_timezone_set('America/Sao_Paulo');
$dataPost = date('d/m/Y H:i');
$conteudoPost = isset($_POST['conteudoPost']) ? $_POST['conteudoPost'] : null;
$tagPost = isset($_POST['tagPost']) ? $_POST['tagPost'] : null;
$categoriaPost = isset($_POST['categoriaPost']) ? $_POST['categoriaPost'] : null;


$post = new Post($idUser, $dataPost, $conteudoPost, $tagPost, $categoriaPost);

// insere no BD
$PDO = db_connect();
$sql = "INSERT INTO Post(idUsuario, dataPost, conteudoPost, Tag, Categoria_idCategoria) VALUES(:idUser, :dataPost, :conteudoPost, :tagPost, :categoriaPost)";
$stmt = $PDO->prepare($sql);
@$stmt->bindParam(':idUser', $post->getUser());
@$stmt->bindParam(':dataPost', $post->getDataPost());
@$stmt->bindParam(':conteudoPost', $post->getConteudoPost());
@$stmt->bindParam(':tagPost', $post->getTagPost());
@$stmt->bindParam(':categoriaPost', $post->getCategoriaPost());


if ($stmt->execute()) {
    echo "Postado com sucesso!";
} else {

    echo "Erro ao cadastrar postagem!!";
    print_r($stmt->errorInfo());
}
?>
