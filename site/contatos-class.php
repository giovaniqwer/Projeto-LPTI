<?php

class contatos {

    private $nome;
    private $email;
    private $comentario;
    private $data;

    public function __construct($nome, $email, $comentario, $data) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setComentario($comentario);
        $this->setData($data);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getComentario() {
        return $this->comentario;
    }

    public function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

}

?>