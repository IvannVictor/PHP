<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso do for</title>
</head>
<body>
    <?php
        // Declarando as variaveis dentro da estrutura for!
        for($cont = 1; $cont <= 10; $cont++){
            echo "Contador = $cont";
        }

        // Pulando uma linha!
        echo "<br>";

        // Iniciando outro for!
        for($cont = 10; $cont >= 1; $cont--){
            echo "Contador = $cont";
        }

        // For pulando de dois em dois
        for($cont = 1; $cont <= 20; $cont += 2){
            echo "Contador = $cont";
        }
    ?>
</body>
</html>