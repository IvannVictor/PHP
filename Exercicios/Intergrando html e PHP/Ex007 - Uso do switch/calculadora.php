<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body style="text-align: center;">
    <?php
        // Declarando as variaveis
        $valor = isset($_GET["nun"]) ? $_GET["nun"] : 0;
        $op = isset($_GET["op"]) ? $_GET["op"] : 1;

        // verificando as opções
        switch($op){
            case 1:
                $res = $valor * 2;
                break;
            
            case 2:
                $res = $valor ^ 3;
                break;
            
            case 3:
                $res = sqrt($valor);
        }

        // Mostrando o resultado!
        echo "O valor da operação escolhida é: $res";
    ?>

    <a href="index.html">voltar</a>
</body>
</html>