<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cores</title>

    <?php
        // Iniciando as variaveis
        $txt = isset($_GET["texto"]) ? $_GET["texto"] : "Por favor digite o texto na pagina anterior";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>

    <!-- Colocando a cor no texto -->
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
        // Mostrando o resultado
        echo "<span class='texto'>$txt</span>";
    ?>
</body>
</html>