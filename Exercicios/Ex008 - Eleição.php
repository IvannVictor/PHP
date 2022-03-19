<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleição</title>
</head>
<body>
    <?php
        // Declarando as variaveis!
        $anoNascimento = $_GET["a"];
        $idade = 2022 - $anoNascimento;

        // Verificando a obrigatoriedade de voto!
        $voto = ($idade >= 18 && $idade < 65) ? "voto obrigatorio" : "voto opcional";

        // Mostrando os resultados!
        echo "Nascido em $anoNascimento voce tem $idade anos. <br/>Neste idade você tem $voto."
    ?>
</body>
</html>