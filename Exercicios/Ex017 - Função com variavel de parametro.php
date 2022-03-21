<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função com variavel de parametros</title>
</head>
<body>
    <?php
        // Iniciando a variavel
        $valor = 3;

        // Iniciando uma função comum!
        function comum($x){
            $x += 2;
            echo "O valor de x é: $x";
        }

        // Mostrando o valor da variavel
        comum($valor)
        echo "O valor da variavel valor é: $valor";

        
        // Agora a função com variavel de parametro!
        // Iniciando a variavel
        $valor2 = 3;

        // Iniciando a função
        function varparametro(&$z){
            $z += 2;
            echo "O valor de z é: $z";
        }

        // Mostrando os valores da variavel
        varparametro($valor2)
        echo "O valor da variavel valor2 é: $valor2";
    ?>
</body>
</html>