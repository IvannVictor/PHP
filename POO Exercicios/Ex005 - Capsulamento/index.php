<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
    <h1>Controle Remoto</h1>
    <pre>
        <?php
            // Importando a classe!
            require_once 'ControleRemoto.php';

            // Criando o nosso controle!
            $controle = new ControleRemoto;
            $controle->ligar();
            $controle->play();
            $controle->maisVolume(60);
            $controle->desligar();
            $controle->pause();
        ?>
    </pre>
</body>
</html>