<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <title>Formulário de cadastro Imc</title>

</head>
<body>

<form action="Cadastrar.php" method="post">

    <label for="nome">Nome:</label>
    <input name="nome" type="text" required/>


    <label for="idade">Idade(anos):</label>
    <input name="idade" type="number" required/>

    <label for="peso">Peso(K):</label>
    <input name="peso" type="number" required/>

    <label for="altura">Altura(M)</label>
    <input name="altura" type="number" step="0.01" min="1" max="3"required/>



    <input name="acao" type="submit" value="Cadastrar" />


</form>

</body>
</html>
