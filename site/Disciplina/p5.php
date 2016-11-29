<?php

//Consulta do periodo 1 no banco de dados
require_once '../init.php';

function sqlp5() {

    $sql_p5 = "SELECT
			Disciplina.idDisciplina,
			Disciplina.ementa,
			Disciplina.nomeEmenta,
			Disciplina.nome,
			Disciplina.creditos,
			Disciplina.Curso_idCurso,
			Disciplina.periodo,
			Disciplina.tipo
			FROM
				Disciplina
			
			LEFT JOIN Curso ON Curso.idCurso = Disciplina.Curso_idCurso
			WHERE periodo = 5
			ORDER BY
				idDisciplina ASC ";
    $PDO = db_connect();
    $stmt_p5 = $PDO->prepare($sql_p5);
    $stmt_p5->execute();
    return $stmt_p5;
}

?>
