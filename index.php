<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Cálculo de Massa Corporal - IMC</title>

        <style type="text/css">
            @import "css/stylesheet.css";
        </style>
    </head>

    <body>
        <div id="container">
            <div id="head">
                <h1>Calcule seu IMC e de seus amigos!</h1>
                <p>O índice de Massa Corporal (IMC) é reconhecido como padrão internacional para avaliar o
                    grau de obesidade.
                </p>

                <p>Preencha os campos abaixo:</p>
            </div>

            <div id="body">
                <section id="form">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="input">
						<article class="cardUsuario">
							<label for="nome1" id="nome01" class="labels">Nome:</label>
							<input type="text" name="nome1" id="nome1" placeholder="Informe seu nome" required>

							<label for="idade1" class="labels" >Idade:</label>
							<input type="number" name="idade1" id="idade1" class="inputs" placeholder="Ex.: 31" required>

							<label for="peso1" class="labels">Peso:</label>
							<input type="number" name="peso1" id="peso1" class="inputs" placeholder="Ex.: 56" required>

							<label for="altura1" class="labels">Altura:</label>
							<input type="number" name="altura1" id="altura1" step="0.01" min="1" max="3"required class="inputs" placeholder="Ex.: 1.67" required>
						</article>

						<article class="cardUsuario">
							<label for="nome1" id="nome02" class="labels">Nome:</label>
							<input type="text" name="nome2" id="nome2"  placeholder="Informe seu nome" required>

							<label for="idade1" class="labels">Idade:</label>
							<input type="number" name="idade2" id="idade2" class="inputs" placeholder="Ex.: 31" required>

							<label for="peso1" class="labels">Peso:</label>
							<input type="number" name="peso2" id="peso2" class="inputs" placeholder="Ex.: 56" required>

							<label for="altura1" class="labels">Altura:</label>
							<input type="number" name="altura2" id="altura2" step="0.01" min="1" max="3"required class="inputs"  placeholder="Ex.: 1.67"required>
                      	</article>

						<article class="cardUsuario">
							<label for="nome3" id="nome03" class="labels">Nome:</label>
							<input type="text" name="nome3" id="nome3"  placeholder="Informe seu nome" required>

							<label for="idade3" class="labels">Idade:</label>
							<input type="number" name="idade3" id="idade3" class="inputs" placeholder="Ex.: 31" required>

							<label for="peso1" class="labels">Peso:</label>
							<input type="number" name="peso3" id="peso3" class="inputs" placeholder="Ex.: 56" required>

							<label for="altura3" class="labels">Altura:</label>
							<input type="number" name="altura3" id="altura3" step="0.01" min="1" max="3"required class="inputs"  placeholder="Ex.: 1.67" required>
						</article>
						<div id="botoes">
							<input class="button" name ="submit" type="submit" id="calcular" value="Calcular"/>
                      		<input class="button" type="reset" id="limpar" value="Limpar"/>
						</div>
                    </form>
                </section>

				<section id="resultados">
					<?php
					$visibilidade = isset ($_POST['submit']) ? "" : "none";
					echo "<div id='" . $visibilidade . "'>";

					if(isset($_POST ['submit']))
					{
						include "php/usuario.class.php";
						
						$nome1 = mb_strtoupper($_POST["nome1"]);
						$idade1 = $_POST["idade1"];
						$peso1 = $_POST["peso1"];
						$altura1 = $_POST["altura1"];
						$nome2 = mb_strtoupper($_POST["nome2"]);
						$idade2 = $_POST["idade2"];
						$peso2 = $_POST["peso2"];
						$altura2 = $_POST["altura2"];
						$nome3 = mb_strtoupper($_POST["nome3"]);
						$idade3 = $_POST["idade3"];
						$peso3 = $_POST["peso3"];
						$altura3 = $_POST["altura3"];

						function calcularImc($user) {
							$peso = $user->peso;
							$altura = $user->altura;
							$imc = $peso / ($altura ** 2);
							return number_format($imc, 2, '.', '');
						}

						function mediaImc($imc_lista) {
							$soma = array_sum($imc_lista);
							$divisor = count($imc_lista);
							$media = $soma / $divisor;
							return number_format($media, 2, '.', '');
						}

						function mediaIdade($idade_lista){
							$soma = array_sum($idade_lista);
							$divisor = count($idade_lista);
							$media = $soma / $divisor;
							return round($media);
						}

						$cat_1 = "abaixo do peso";
						$cat_2 = "peso saudável";
						$cat_3 = "sobrepeso";
						$cat_4 = "obesidade grau I";
						$cat_5 = "obesidade grau II";
						$cat_6 = "obesidade grau III";

						function categoria($usuario){
							$imc = 	$usuario->imc;
							global $cat_1, $cat_2, $cat_3, $cat_4, $cat_5, $cat_6;
							switch ($imc){
								case ($imc < 18.5):
									$usuario->categoria = " " . $cat_1;
									break;
								case ($imc >= 18.5 && $imc <= 24.9):
									$usuario->categoria = " com $cat_2 ";
									break;
								case ($imc >= 25.0 && $imc <= 29.9):
									$usuario->categoria = " com $cat_3 ";
									break;
								case ($imc >= 30.0 && $imc <= 34.9):
									$usuario->categoria = " com $cat_4 ";
									break;
								case ($imc > 35 && $imc <= 39.9):
									$usuario->categoria = " com $cat_5 ";
									break;
								case ($imc >= 40):
									$usuario->categoria = " com $cat_6 ";
									break;
							};
						};

						function categ_media($imc){
							global $cat_1, $cat_2, $cat_3, $cat_4, $cat_5, $cat_6;
							switch ($imc){
								case ($imc < 18.5):
									return $cat_1;
									break;
								case ($imc >= 18.5 && $imc <= 24.9):
									return $cat_2;
									break;
								case ($imc >= 25.0 && $imc <= 29.9):
									return $cat_3;
									break;
								case ($imc >= 30.0 && $imc <= 34.9):
									return $cat_4;
									break;
								case ($imc > 35 && $imc <= 39.9):
									return $cat_5;
									break;
								case ($imc >= 40):
									return $cat_6;
									break;
							};
						};

						$usuario1 = new Usuario($nome1, $idade1, $peso1, $altura1, "", "");
						$usuario2 = new Usuario($nome2, $idade2, $peso2, $altura2, "", "");
						$usuario3 = new Usuario($nome3, $idade3, $peso3, $altura3, "", "");

						$usuario1->imc = calcularImc($usuario1);
						$usuario2->imc = calcularImc($usuario2);
						$usuario3->imc = calcularImc($usuario3);

						categoria($usuario1);
						categoria($usuario2);
						categoria($usuario3);

						$idade_lista = array($idade1, $idade2, $idade3);	
						$imc_lista = array($usuario1->imc, $usuario2->imc, $usuario3->imc);
						$media_imc = mediaImc($imc_lista);
						
						echo $usuario1;
						echo $usuario2;
						echo $usuario3;											
						echo "<p>A média de IMC dos internautas é $media_imc e corresponde à categoria " . categ_media($media_imc) . ".</p>";
						echo "<p>A média de idade é " . mediaIdade($idade_lista) ." anos.</p>";
					}
					echo "</div>";
					?>
				</section>
                
                <section id="table">
                    <table>
                        <thead>
                            <th>Categoria</th>
                            <th>IMC</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Abaixo do Peso</td>
                                <td>Abaixo de 18,5</td>
                            </tr>
                            <tr>
                                <td>Peso saudável</td>
                                <td>18,5 - 24,9</td>
                            </tr>
                            <tr>
                                <td>Sobrepeso</td>
                                <td>25,0 - 29,9</td>
                            </tr>
                            <tr>
                                <td>Obesidade Grau I</td>
                                <td>30,0 - 34,9</td>
                            </tr>
                            <tr>
                                <td>Obesidade Grau II</td>
                                <td>35,0 - 39,9</td>
                            </tr>
                            <tr>
                                <td>Obesidade Grau III</td>
                                <td>40,0 e acima</td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <section id="cardImages">
                  <img src="imgs/img01.png" class="images">
                  <img src="imgs/img02.png" class="images">
                  <img src="imgs/img03.png" class="images">
                  <img src="imgs/img04.png" class="images">
                </section>

                <section id="alunas">
                    <p>Alanda | Aline Cruz | Aline Dias | Bruna Rossoni</p>
                </section>
            </div>
        </div>
    </body>
</html>
