<?php

// declaração de classe
class Usuario {

    // declaração de atributos
    // encapsulamento:
    // private = apenas na classe
    // protected = na classe e nas subclasses
    // public = aberta
    private $nome;
    public $idade;
    protected $peso;
    private $altura;

    // construtor é definido pela palavra reservada __construct
    // pode ou não ter parâmetros
    // para um construtor poder não receber parâmetros deve-se
    // definir valores padrão como neste exemplo
    function __construct($nome="", $idade="", $peso="", $altura="") {
        // associação de valores
        // usa-se o -> para unir o objeto e o atributo
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

    // método para impressão de dados do objeto
    function __toString()
    {
        return "Nome: " . $this->nome . "  Idade: " .
            $this->idade . "  Peso: " . $this->peso . "  Altura: " . $this->altura . "";
    }

}


?>
