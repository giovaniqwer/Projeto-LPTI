<?php

require_once '../init.php';
// pega o ID da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
// valida o ID
if (empty($id)) {
    echo " ID não informado";
    exit;
}
//Atualiza do BD
$PDO = db_connect();
$sql = "UPDATE Usuario SET Atividade=1 
WHERE idUsuario='$id';";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute()) {
    header('Location: listaUsuario.php');
    echo "batata";
} else {
    echo " Erro ao excluir";
    print_r($stmt->errorInfo());
}
?>
