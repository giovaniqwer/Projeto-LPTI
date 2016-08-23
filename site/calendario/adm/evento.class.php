<?php 
	class Evento{
		//decarando variaveis//
		private $data;
		private $local;
		private $palestrante;
		private $horario;
		private $tema;
		private $descricao;
		private $classificacao;
		
		//construtor//
		public function __construct($data, $local, $palestrante, $horario, $tema, $descricao, $classificacao){
			$this->setData($data);
			$this->setLoc($local);
			$this->setPales($palestrante);
			$this->setHor($horario);
			$this->setTema($tema);
			$this->setDesc($descricao);
			$this->setClas($classificacao);
		}
		//pega e entrega local//
		public function setLoc($local){
			$this->local = $local;
		}
		public function getLoc(){
			return $this->local;
		}
		//pega e entrega DATA//
		public function setData($data){
			$datap = explode('/', $data);
			$this->data = "$datap[2]-$datap[1]-$datap[0]";			
		}
		public function getData(){
			return $this->data;
		}
		//pega e entrega palestrante//
		public function setPales($palestrante){
			$this->palestrante= $palestrante;
		}
		public function getPales(){
			return $this->palestrante;
		}
		
		//pega e entrega horario//
		public function setHor($horario){
			$this->horario= $horario;
		}
		public function getHor(){
			return $this->horario;
		}
		
		//pega e entrega tema//
		public function setTema($tema){
			$this->tema= $tema;
		}
		public function getTema(){
			return $this->tema;
		}
		
		//pega e entrega descricao//
		public function setDesc($descricao){
			$this->descricao= $descricao;
		}
		public function getDesc(){
			return $this->descricao;
		}
		
		//pega e entrega classificacao//
		public function setClas($classificacao){
			$this->classificacao= $classificacao;
		}
		public function getClas(){
			return $this->classificacao;
		}
	}

?>
