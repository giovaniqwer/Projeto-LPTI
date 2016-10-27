<?php

//Consulta do periodo 1 no banco de dados
require_once '../init.php';

function sqlp3() {

    $sql_p3 = "SELECT
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
			WHERE periodo = 3
			ORDER BY
				idDisciplina ASC ";
    $PDO = db_connect();
    $stmt_p3 = $PDO->prepare($sql_p3);
    $stmt_p3->execute();
    return $stmt_p3;
}

?>
