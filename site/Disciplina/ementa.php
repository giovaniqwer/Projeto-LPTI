<?php

require_once '../init.php';
include_once '../Disciplina/disciplina-class.php';
/*
// pega os dados do formulário
$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = isset($_POST['editNome']) ? $_POST['editNome'] : null;
$sobrenome = isset($_POST['editSobrenome']) ? $_POST['editSobrenome'] : null;
$senha = isset($_POST['editSenha']) ? $_POST['editSenha'] : null;
$email = isset($_POST['editEmail']) ? $_POST['editEmail'] : null;



// instancia objeto usuario
$usuario = new Usuario($nome, $sobrenome, $senha, $email);

// atualiza o BD
$PDO = db_connect();
$sql = "UPDATE Usuario SET nome = :nome, sobrenome = :sobrenome, senha = :senha, email = :email WHERE idUsuario = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $usuario->getNome());
$stmt->bindParam(':sobrenome', $usuario->getSobrenome());
$stmt->bindParam(':senha', $usuario->getSenha());
$stmt->bindParam(':email', $usuario->getEmail());
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    header('Location: edit-user.php');
} else {
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}*/
?>
