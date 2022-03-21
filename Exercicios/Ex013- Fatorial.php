<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <?php
        // Iniciando as variaveis!
        $var = isset($_GET["a"]) ? $_GET["a"] : 1;
        $contador = $var;
        $fat = 1;

        // Mostrando o resultado!
        echo "Calculando o fatorial de $val";

        // Iniciando o Do while!
        do{
            $fat = $fat * $contador;
            $contador--;
        }while($contador >= 1);

        // Mostrando o calculo!
        echo "O valor fatorial de $var é: $fat";
    ?>
</body>
</html>