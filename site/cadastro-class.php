<?php
    class Usuario{
        private $nome;
        private $sobrenome;
        private $senha;
        private $email;
        private $matricula;
        private $tipo;

        public function __construct($nome,$sobrenome,$senha, $email, $matricula,$tipo){
            $this->setNome($nome);
            $this->setSobrenome($sobrenome);
            $this->setSenha($senha);
            $this->setEmail($email);
            $this->setIdentificacao($matricula);
            $this->setTipo($tipo);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }
        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getIdentificacao(){
            return $this->matricula;
        }

        public function setIdentificacao($matricula){
            $this->matricula = $matricula;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
    }
?>
