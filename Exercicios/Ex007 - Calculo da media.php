<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a media</title>
</head>
<body>
    <?php
        // Iniciando as variaveis
        $nota1 = $_GET["a"];  // Lembrando que tem que colocar os valores pela URL!
        $nota2 = $_GET["b"];

        // Calculando a media
        $media = ($nota1 + $nota2) / 2

        // Mostrando os resultados na tela e verificando a situação!
        echo "A media entre as notas $nota1 e $nota2 é $media!<br/>Com essa media a sua situação é ". (($media >= 6.5) ? "Aprovado" : "Reprovado");
    ?>
</body>
</html>