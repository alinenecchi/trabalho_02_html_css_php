<?php

class Usuario {
    public $nome;
    public $idade;
    public $peso;
    public $altura;
    public $categoria;
    public $imc;

    function __construct($nome, $idade, $peso, $altura, $categoria, $imc) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->categoria = $categoria;
        $this->imc = $imc;
    }

    function __set($prop, $val) {
        $this->$prop = $val;
    }

    function __get($prop) {
        return $this->$prop;
    }

    function __toString()
    {
        return "<p>" . $this->nome . ", " . $this->idade . "  anos. Seu IMC é " . $this->imc . " e você está " . $this->categoria . ". </p><span>Resultado obtido a partir do peso " . $this->peso . "kg e da altura " . $this->altura . "m.</span>";
    }
}
?>
