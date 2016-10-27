<?php

session_start();
require_once '../init.php';
include_once 'disciplina-class.php';

// pega os dados do formulário

$nome= isset($_POST['editNomeDisciplina']) ? $_POST['editNomeDisciplina'] : null;
$creditos= isset($_POST['editCredito']) ? $_POST['editCredito'] : null;
$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : null;
$ementa = isset($_FILES['conteudoEmenta']) ? $FILES_['conteudoEmenta'] : null;
$curso = 1;
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;

$materia = new Disciplina($ementa, $nome, $creditos, $curso, $periodo,$tipo);

// insere no BD
$PDO = db_connect();
$sql = "INSERT INTO Disciplina(ementa,nome, creditos, Curso_idCurso,periodo,tipo) VALUES(:ementa, :nome, :creditos, :curso, :periodo,:tipo)";
$stmt = $PDO->prepare($sql);
@$stmt->bindParam(':ementa', $materia->getEmenta());
@$stmt->bindParam(':nome', $materia->getNome());
@$stmt->bindParam(':creditos', $materia->getCreditos());
@$stmt->bindParam(':curso', $materia->getCurso());
@$stmt->bindParam(':periodo', $materia->getPeriodo());
@$stmt->bindParam(':tipo', $materia->getTipo());


if ($stmt->execute()) {
    echo "Adicionado com sucesso!";
} else {

    echo "Erro ao cadastrar Disciplina!!";
    print_r($stmt->errorInfo());
}
?>
