<?php

// verifica se as informações vieram
// através do método POST
if(isset($_POST))
{

    // chamada da classe para instância
    include "Usuario.class.php";

    // recebe os valores vindos do formulário através de post
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    // instancia um objeto do tipo Usuario passando informações pelo construtor
    $usuario = new Usuario($nome, $idade, $peso, $altura);

    echo "Dados recebidos: ".$usuario."<br/>";




}

?>
