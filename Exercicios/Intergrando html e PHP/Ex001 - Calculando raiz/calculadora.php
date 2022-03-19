<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body style="text-align: center;">
    <h1>Resultado</h1>

    <?php
        // Declarando as variaveis
        $valor = $_GET["v"];  // O valor entre aspas tem que ser o mesmo que voce colocou no name do formulario!

        // Calculando a raiz!
        $raiz = sqrt($valor);

        // Mostrando os resultados!
        echo "A raiz quadrada do valor $valor é: ". number_format($raiz, 2);
    ?>

    <a href="index.html">(Voltar)</a>
</body>
</html>