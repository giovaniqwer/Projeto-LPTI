<?php

//Consulta do periodo 1 no banco de dados
require_once '../init.php';

function sqlp4() {

    $sql_p4 = "SELECT
			Disciplina.idDisciplina,
			Disciplina.ementa,
			Disciplina.nome,
			Disciplina.creditos,
			Disciplina.Curso_idCurso,
			Disciplina.periodo,
			Disciplina.tipo
			FROM
				Disciplina
			
			LEFT JOIN Curso ON Curso.idCurso = Disciplina.Curso_idCurso
			WHERE periodo = 4
			ORDER BY
				idDisciplina ASC ";
    $PDO = db_connect();
    $stmt_p4 = $PDO->prepare($sql_p4);
    $stmt_p4->execute();
    return $stmt_p4;
}

?>
