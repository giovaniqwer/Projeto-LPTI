<?php

class Post {

    private $idUser;
    private $dataPost;
    private $conteudoPost;
    private $tagPost;
    private $categoriaPost;

    public function __construct($idUser, $dataPost, $conteudoPost, $tagPost, $categoriaPost) {
        $this->setUser($idUser);
        $this->setDataPost($dataPost);
        $this->setConteudoPost($conteudoPost);
        $this->setTagPost($tagPost);
        $this->setCategoriaPost($categoriaPost);
    }

    public function getUser() {
        return $this->idUser;
    }

    public function setUser($idUser) {
        $this->idUser = $idUser;
    }

    public function getDataPost() {
        return $this->dataPost;
    }

    public function setDataPost($dataPost) {
        $this->dataPost = $dataPost;
    }

    public function getConteudoPost() {
        return $this->conteudoPost;
    }

    public function setConteudoPost($conteudoPost) {
        $this->conteudoPost = $conteudoPost;
    }

    public function getCategoriaPost() {
        return $this->categoriaPost;
    }

    public function setCategoriaPost($categoriaPost) {
        $this->categoriaPost = $categoriaPost;
    }

    public function getTagPost() {
        return $this->tagPost;
    }

    public function setTagPost($tagPost) {
        $this->tagPost = $tagPost;
    }

}

?>