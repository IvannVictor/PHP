<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo os dados</title>
</head>
<body>
    <?php
        // Iniciando as variaveis
        $cont = 1;

        // Iniciando o while para pegar os dados do formulario
        while($cont <= 5){
            // Iniciando variaveis de variaveis
            $var = "nun".$cont;
            $url = "v".$cont;
            $$v = isset($_GET["$url"]) ? $_GET["$url"] : 0;
            $cont++;
        }

        // While para mostrar os dados na tela
        while($cont <= 5){
            $var = "nun".$cont;
            echo "Valor $cont: ".$$v."<br>";
            $cont++;
        }

        // Podemos mostrar desta forma tambem!
        echo "$nun1 $nun2 $nun3 $nun4 $nun5";
    ?>
</body>
</html>