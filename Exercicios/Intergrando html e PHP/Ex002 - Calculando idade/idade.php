<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de idade</title>
</head>
<body style="text-align: center">
    <h1>Resutado dos calculos da idade</h1>

    <?php
        // Declarando as variaveis!
        $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "Não Informado";  // Lembrando que os valores vem preenchidos do formulario em html!
        $anosc = isset ($_GET["datanasc"]) ? $_GET["datanasc"] : "Não Informado";  // isset é usado para testar se ja esta pré definido os valores para que não de erro o programa antes de colocar os valores!
        $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "Não Informado";
        $idade = date("Y") - $anosc;  // Função date para pegar o ano atual, Y para pegar o ano inteiro y para pegar so os dois ultimos digitos do ano!

        // Mostrando os resultados!
        echo "$nome do sexo $sexo, nascido em $anosc tem $idade anos!";
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>