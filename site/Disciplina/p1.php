<?php

//Consulta do periodo 1 no banco de dados
require_once '../init.php';

function sqlp1() {

    $sql_p1 = "SELECT
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
			WHERE periodo = 1
			ORDER BY
				idDisciplina ASC ";
    $PDO = db_connect();
    $stmt_p1 = $PDO->prepare($sql_p1);
    $stmt_p1->execute();
    return $stmt_p1;
}

?>
