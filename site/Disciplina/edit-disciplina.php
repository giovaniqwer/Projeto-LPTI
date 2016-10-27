<?php

require_once '../init.php';
include_once 'disciplina-class.php';


// pega os dados do formulário
$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : null;
$creditos = isset($_POST['creditos']) ? $_POST['creditos'] : null;
$ementa = isset($_POST['ementa']) ? $_POST['ementa'] : null;
$curso=1;
$materia = new Disciplina($ementa, $nome, $creditos, $curso, $periodo,$tipo);
//Atualiza do BD
$PDO = db_connect();
$sql = "UPDATE Disciplina SET ementa = :ementa, nome = :nome, creditos = :creditos,Curso_idCurso=:curso, periodo = :periodo, tipo = :tipo WHERE idDisciplina=:id";

$stmt = $PDO->prepare($sql);
@$stmt->bindParam(':ementa', $materia->getEmenta());
@$stmt->bindParam(':nome', $materia->getNome());
@$stmt->bindParam(':creditos', $materia->getCreditos());
@$stmt->bindParam(':curso', $materia->getCurso());
@$stmt->bindParam(':periodo', $materia->getPeriodo());
@$stmt->bindParam(':tipo', $materia->getTipo());
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    header('Location: ../admin/edit-disciplina.php');
} else {
    echo " Erro ao editar";
    print_r($stmt->errorInfo());
}
?>
