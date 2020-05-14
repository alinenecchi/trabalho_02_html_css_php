<?php

// declaração de classe
class Usuario {

    private $nome;
    public $idade;
    protected $peso;
    private $altura;

    // construtor é definido pela palavra reservada __construct

    function __construct($nome="", $idade="", $peso="", $altura="") {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura =$altura;
    }

    // "método mágico" para criação de set genérico
    // ou seja, cria um set que pode ser usado por todos os atributos
    function __set($prop, $val) {
        $this->$prop = $val;
    }

    // "método mágico" para criação de get genérico
    // ou seja, cria um get que pode ser usado por todos os atributos
    function __get($prop) {
        return $this->$prop;
    }
    function __toString() {
        return " Nome: ".$this->nome ." -> Idade: ".$this->idade ." -> Peso: " . $this->peso. " -> Altura: ".$this->altura;
    }
}

?>