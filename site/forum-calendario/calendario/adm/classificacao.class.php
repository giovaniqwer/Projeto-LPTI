<?php 
	class Classificacao{
		//declarando variaveis//
		private $nome;
		private $cor;

		
		//construtor//
		public function __construct($nome, $cor){
			$this->setClass($nome);
			$this->setCor($cor);
		}
		//pega e entrega a cor//
		public function setCor($cor){
			$this->cor = $cor;
		}
		public function getCor(){
			return $this->cor;
		}		
		//pega e entrega o nome da classificacao//
		public function setClass($nome){
			$this->nome= $nome;
		}
		public function getClass(){
			return $this->nome;
		}
	}

?>
