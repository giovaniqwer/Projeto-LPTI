<?php
	require_once '../init.php';
	
	function sqlComentario ($idPost){
			
            $sql_comentario = "SELECT 
                   Comentario.idComentario, 
                   Comentario.idPost, 
                   Comentario.idUsuario, 
                   Comentario.dataComentario, 
                   Comentario.textoComentario,
                   Usuario.nome,
                   Usuario.sobrenome
                   FROM 
                      Comentario
                   LEFT JOIN Post ON Comentario.idPost = Post.idPost
                   LEFT JOIN Usuario ON Comentario.idUsuario = Usuario.idUsuario
                   WHERE 
                     Comentario.idPost =" . $idPost .
                     " ORDER BY Comentario.idComentario DESC ";
            $PDO = db_connect();
            $stmt_comentario = $PDO->prepare($sql_comentario);
            $stmt_comentario->execute();
            return $stmt_comentario;
	}
        
?>
