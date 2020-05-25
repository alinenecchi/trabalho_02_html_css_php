<?php

// declaração de classe
class Usuario {

    // declaração de atributos
    // encapsulamento:
    // private = apenas na classe
    // protected = na classe e nas subclasses
    // public = aberta
    public $nome;
    public $idade;
    public $peso;
    public $altura;
		public $categoria;
		public $imc;


    // construtor é definido pela palavra reservada __construct
    // pode ou não ter parâmetros
    // para um construtor poder não receber parâmetros deve-se
    // definir valores padrão como neste exemplo
    function __construct($nome, $idade, $peso, $altura, $categoria, $imc) {
        // associação de valores
        // usa-se o -> para unir o objeto e o atributo
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->categoria = $categoria;
        $this->imc = $imc;
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
        return "<p>" . $this->nome . ", " .
            $this->idade . "  anos. Seu IMC é " . $this->imc . " e você está " 
            . $this->categoria . ". </p><span>Resultado obtido a partir do peso " . $this->peso . 
						"kg e da altura " . $this->altura . "m.</span>";
    }

}
//NOME IDADE anos
//Seu imc é IMC e você está com CATEGORIA
//Resultado obtido a partir do peso PESO e da altura ALTURA
//A média de imc dos internautas é IMC corresponde à CATEGORIA
//A média de idade é IDADE anos

?>
