<?php

//Consulta do periodo 1 no banco de dados
require_once '../init.php';

function sqlp2() {

    $sql_p2 = "SELECT
			Disciplina.idDisciplina,
			Disciplina.ementa,
			Disciplina.nome,
			Disciplina.nomeEmenta,
			Disciplina.creditos,
			Disciplina.Curso_idCurso,
			Disciplina.periodo,
			Disciplina.tipo
			FROM
				Disciplina
			
			LEFT JOIN Curso ON Curso.idCurso = Disciplina.Curso_idCurso
			WHERE periodo = 2
			ORDER BY
				idDisciplina ASC ";
    $PDO = db_connect();
    $stmt_p2 = $PDO->prepare($sql_p2);
    $stmt_p2->execute();
    return $stmt_p2;
}

?>
