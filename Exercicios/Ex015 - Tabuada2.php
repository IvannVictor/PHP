<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        // Iniciando as variaveis
        $var = isset($_GET["nun"]) ? $_GET["nun"] : 1;

        // Iniciando o for
        for($cont = 1; $cont <= 10; $cont++){
            $res = $cont * $var;
            echo "$cont X $var = $res <br>";
        }
    ?>

    <!-- Voltando para o Index -->
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>