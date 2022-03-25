<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe caneta</title>
</head>
<body>
    <?php
        // Chamando a classe!
        require_once 'ClasseCaneta.php';

        // Istanciando o objeto!
        $caneta = new Caneta("BIC", 0.7);  // Criamos uma variavel para armazenar os dados da nossa classe caneta!

        // Mostrando a classe criada!
        print_r($caneta);

        // Inserindo so valores atraves dos metodos criados!
        $caneta->setModelo("BIC");
        $caneta->setPonta(0.5);

        // MOstrando o resultado!
        echo "Eu tenho uma caneta {$caneta->getModelo()} da ponta {$caneta->getPonta()}";
    ?>
</body>
</html>