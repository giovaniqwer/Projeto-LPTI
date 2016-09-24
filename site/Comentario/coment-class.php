<?php

class Comentario {

    private $idPost;
    private $idUsuario;
    private $textoComentario;
    private $dataComentario;

    public function __construct($idPost, $idUsuario, $textoComentario, $dataComentario) {

        $this->setIdPost($idPost);

        $this->setIdUsuario($idUsuario);
        $this->setTextoComentario($textoComentario);
        $this->setDataComentario($dataComentario);
    }

    public function getIdPost() {
        return $this->idPost;
    }

    public function setIdPost($idPost) {
        $this->idPost = $idPost;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getTextoComentario() {
        return $this->textoComentario;
    }

    public function setTextoComentario($textoComentario) {
        $this->textoComentario = $textoComentario;
    }

    public function getDataComentario() {
        return $this->dataComentario;
    }

    public function setDataComentario($dataComentario) {
        $this->dataComentario = $dataComentario;
    }

    public function informaPost() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        // valida o ID
        if (empty($id)) {
            echo " ID não informado";
            exit;
        }
        $PDO = db_connect();
        $sql = "INSERT INTO Comentario(idPost) VALUES(:id)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    }

}

?>
