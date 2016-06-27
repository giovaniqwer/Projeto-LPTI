<?php
    class contatos{
        private $nome;
        private $email;
        private $comentario;
    
        public function __construct($nome, $email, $comentario){
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setComentario($comentario);
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getComentario(){
            return $this->comentario;
        }
        
        public function setComentario($comentario){
            $this->comentario = $comentario;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
    }
?>