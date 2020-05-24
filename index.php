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
                    <form action:"php/cadastrar.php" method="post" id="input" name="calcular">
                      <article class="cardUsuario">
                        <label for="nome1" id="nome01" class="labels">Nome:</label>
                        <input type="text" name="nome1" id="nome1" placeholder="Digite o seu nome" required>

                        <label for="idade1" class="labels" >Idade:</label>
                        <input type="number" name="idade1" id="idade1" class="inputs" placeholder="Anos   Ex: 31" required>

                        <label for="peso1" class="labels">Peso:</label>
                        <input type="number" name="peso1" id="peso1" class="inputs" placeholder="Kg   Ex: 56" required>

                        <label for="altura1" class="labels">Altura:</label>
                        <input type="number" name="altura1" id="altura1" step="0.01" min="1" max="3"required class="inputs" placeholder="Metros   Ex: 1,67" required>
                   		</article>

                      <article class="cardUsuario">
                        <label for="nome1" id="nome02" class="labels">Nome:</label>
                        <input type="text" name="nome2" id="nome2"  placeholder="Digite o seu nome" required>

                        <label for="idade1" class="labels">Idade:</label>
                        <input type="number" name="idade2" id="idade2" class="inputs" placeholder="Anos   Ex: 31" required>

                        <label for="peso1" class="labels">Peso:</label>
                        <input type="number" name="peso2" id="peso2" class="inputs" placeholder="Kg   Ex: 56" required>

                        <label for="altura1" class="labels">Altura:</label>
                        <input type="number" name="altura2" id="altura2" step="0.01" min="1" max="3"required class="inputs"  placeholder="Metros   Ex: 1,67"required>
                      </article>

                      <article class="cardUsuario">
                        <label for="nome3" id="nome03" class="labels">Nome:</label>
                        <input type="text" name="nome3" id="nome3"  placeholder="Digite o seu nome" required>

                        <label for="idade3" class="labels">Idade:</label>
                        <input type="number" name="idade3" id="idade3" class="inputs" placeholder="Anos   Ex: 31" required>

                        <label for="peso1" class="labels">Peso:</label>
                        <input type="number" name="peso3" id="peso3" class="inputs" placeholder="Kg   Ex: 56" required>

                        <label for="altura3" class="labels">Altura:</label>
                        <input type="number" name="altura3" id="altura3" step="0.01" min="1" max="3"required class="inputs"  placeholder="Metros   Ex: 1,67" required>
                   		</article>

                      <input class="button" type="submit" name="calcular" id="calcular" value="Calcular"/>
                      <input class="button" type="reset" id="limpar" value="Limpar"/>
                    </form>
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

                <section id="alunas">
                    <p>Alanda | Aline Cruz | Aline Dias | Bruna Rossoni</p>
                </section>
                <img src="imgs/img01.png">
                <img src="imgs/img02.png">
                <img src="imgs/img03.png">
                <img src="imgs/img04.png">
            </div>
        </div>
    </body>
</html>
