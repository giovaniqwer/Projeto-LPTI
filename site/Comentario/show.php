<?php
    $stmt_comentario = sqlComentario($post ['idPost']);
    while ($coment = $stmt_comentario->fetch(PDO::FETCH_ASSOC)):
?>