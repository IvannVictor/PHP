<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
</head>
<body>
    <?php
        // Declarando as variaveis!
        $contador = 1;

        // Inicio Do While!
        do{
            echo "Contador = $contador";
            $contador += 2;
        }while($contador <= 20);  // A estrutura Do while é a mesma da estrutura while, porem ele faz primeiro e valida depois!

        // Contandor regressivo!

        $contador2 = 20;
        do{
            echo "Contador = $contador2";
            $contador2 -= 2;
        }while($contador2 >= 1);
    ?>
</body>
</html>