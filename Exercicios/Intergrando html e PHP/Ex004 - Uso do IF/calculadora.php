<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando</title>
</head>
<body>
    <?php
        // Declarando as variaveis
        $ano = assert($_GET["a"]) ? $_GET["a"] : date("Y");
        $idade = date("Y") - $ano;

        // Mostrando na tela
        echo "Você nasceu em $ano e tem $idade anos! <br/>"

        // Verificando se pode ou ano dirigir e votar, considerando 16 anos como quem pode votar e dirigir
        if(idade >= 18){
            $vota = "ja pode votar";
            $dirigir = "ja pode dirigir";
        }
        else{
            $vota = "não pode votar"
            $dirigir = "não pode dirigir";
        }

        // Mostrando os resultados!
        echo "Com essa idade voce $vota e tambem $dirigir!"
    ?>
</body>
</html>