<?php

session_start();
require_once '../init.php';
include_once 'coment-class.php';

// pega os dados do formulário

$idUsuario = $_SESSION["emailID"];
date_default_timezone_set('America/Sao_Paulo');
$dataComentario = date('d/m/Y H:i');
$textoComentario = isset($_POST['textoComentario']) ? $_POST['textoComentario'] : null;
$idPost = isset($_POST['id_post']) ? $_POST['id_post'] : null;

$coment = new Comentario($idPost, $idUsuario, $textoComentario, $dataComentario);

// insere no BD
$PDO = db_connect();
$sql = "INSERT INTO Comentario(idPost, idUsuario, textoComentario, dataComentario) VALUES(:idPost, :idUsuario, :textoComentario, :dataComentario)";
$stmt = $PDO->prepare($sql);
@$stmt->bindParam(':idPost', $coment->getIdPost());
@$stmt->bindParam(':idUsuario', $coment->getIdUsuario());
@$stmt->bindParam(':textoComentario', $coment->getTextoComentario());
@$stmt->bindParam(':dataComentario', $coment->getDataComentario());

if ($stmt->execute()) {
	echo "<script language='JavaScript'>
window.location='".$_SERVER['HTTP_REFERER']."';
</script> ";

} else {

    echo "Erro ao cadastrar postagem!!";
    print_r($stmt->errorInfo());
}
?>
