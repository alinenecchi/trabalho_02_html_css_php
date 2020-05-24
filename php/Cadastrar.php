<?php

// verifica se as informações vieram
// através do método POST
if(isset($_POST))
{
    // chamada da classe para instância
    include "usuario.class.php";

    // recebe os valores vindos do formulário através de post
    $nome1 = $_POST["nome1"];
    $idade1 = $_POST["idade1"];
    $peso1 = $_POST["peso1"];
    $altura1 = $_POST["altura1"];
    $nome2 = $_POST["nome2"];
    $idade2 = $_POST["idade2"];
    $peso2 = $_POST["peso2"];
    $altura2 = $_POST["altura2"];
    $nome3 = $_POST["nome3"];
    $idade3 = $_POST["idade3"];
    $peso3 = $_POST["peso3"];
    $altura3 = $_POST["altura3"];

    function calcularImc($user) {
      $peso = $user->peso;
      $altura = $user->altura;
      $imc = $peso / ($altura ** 2);
      array_push($imc_lista, $imc);
      return $imc;
    };

    function mediaImc($imc_lista) {
      $soma = array_sum($imc_lista);
      $divisor = count($imc_lista);
      $media = $soma / $divisor;
      return $media;
    };

    function mediaIdade($idade_lista){
      $soma = array_sum($idade_lista);
      $divisor = count($idade_lista);
      $media = $soma / $divisor;
      return $media
    };

    function categoria($usuario){
      $imc = 	$usuario->imc
			switch ($imc){
      case ($imc < 18.5):
      	$usuario->categoria = "Abaixo do Peso";
        break;
      case ($imc >= 18.5 && $imc <= 24.9):
        $usuario->categoria = "Peso saudável";
        break;
      case ($imc >= 25.0 && $imc <= 29.9):
        $usuario->categoria = "Sobrepeso";
        break;
      case ($imc >= 30.0 && $imc <= 34.9):
        $usuario->categoria = "Obesidade Grau I";
        break;
      case ($imc > 35 && $imc <= 39.9):
        $usuario->categoria = "Obesidade Grau II";
        break;
      case ($imc => 40):
        $usuario->categoria = "Obesidade Grau III";
        break;
    	};
    };

    // instancia um objeto do tipo Usuario passando informações pelo construtor
    $usuario1 = new Usuario($nome1, $idade1, $peso1, $altura1);
		$usuario2 = new Usuario($nome2, $idade2, $peso2, $altura2);
		$usuario3 = new Usuario($nome3, $idade3, $peso3, $altura3);

		$imc_lista = array();
    $idade_lista = array($peso1, $peso2, $peso3);
    
		$usuario1->imc = calcularImc($usuario1);
		$usuario2->imc = calcularImc($usuario2);
		$usuario3->imc = calcularImc($usuario3);

    categoria($usuario1);
		categoria($usuario2);
		categoria($usuario3);
    
    echo "Dados recebidos: " . $usuario1 . "<br>";
		echo "Dados recebidos: " . $usuario2 . "<br>";
		echo "Dados recebidos: " . $usuario3 . "<br>";



}

?>

