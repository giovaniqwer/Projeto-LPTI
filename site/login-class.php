<?php
    class Login{
        private $email;
        private $senha;
    
        public function __construct($email, $senha){
            $this->setNome($email);
            $this->setEmail($senha);
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }       
        
        public function getSenha(){
            return $this->senha;
        }
        
        public function setSenha($senha){
            $this->senha = $senha;
        }
    }
?>
