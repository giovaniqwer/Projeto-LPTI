<?php

class Disciplina {

    private $ementa;
    private $nome;
    private $creditos;
    private $curso;
    private $periodo;
    private $tipo;

    public function __construct($ementa, $nome, $creditos, $curso, $periodo, $tipo) {
        $this->setEmenta($ementa);
        $this->setNome($nome);
        $this->setCreditos($creditos);
        $this->setCurso($curso);
        $this->setPeriodo($periodo);
        $this->setTipo($tipo);
    }

    public function getEmenta() {
        return $this->ementa;
    }

    public function setEmenta($ementa) {
        $this->ementa = $ementa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public function setCreditos($creditos) {
        $this->creditos = $creditos;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;

}
}

?>
