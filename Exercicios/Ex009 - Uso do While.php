<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
        // Iniciando a variavel contadora
        $contador = 0;

        // Iniciando o loop While
        while($contador < 10){
            echo "Contador: $contador";
            $contador++;
        }  // While, pode ser interpretado da seguinte forma, "Enquanto contador for menor que 10, mostre os valores nele armazenado e some mais"!

        // Fazendo o contador de decremento
        $contador2 = 10;

        while($contador2 > 0);{
            echo "Contador: $contador2";
            $contador2;
        }
    ?>
</body>
</html>