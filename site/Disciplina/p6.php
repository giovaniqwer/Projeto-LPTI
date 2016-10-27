<?php

//Consulta do periodo 1 no banco de dados
require_once '../init.php';

function sqlp6() {

    $sql_p6 = "SELECT
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
			WHERE periodo = 6
			ORDER BY
				idDisciplina ASC ";
    $PDO = db_connect();
    $stmt_p6 = $PDO->prepare($sql_p6);
    $stmt_p6->execute();
    return $stmt_p6;
}

?>
