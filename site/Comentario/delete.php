<?php

require_once '../init.php';


// pega o ID da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
// valida o ID
if (empty($id)) {
    echo " ID não informado";
    exit;
}
// remove do BD
$PDO = db_connect();
$sql = "DELETE FROM Comentario WHERE idComentario = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute()) {
    echo "<script> alert('Adicionado com sucesso!'); window.history.go(-1); </SCRIPT>\n";
} else {
    echo " Erro ao excluir";
    print_r($stmt->errorInfo());
}
?>
