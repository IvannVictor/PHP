<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste das funções externas</title>
</head>
<body>
    <?php
        // Chamando o arquivo funções para fazer o teste das funções
        include "funções.php";  // Outra alternativa para o inclide, seria o require, seria a mesma coisa, porem caso o programa não tenha essa biblioteca que voce pediu ele para o programa, porque ele é requerido, o include fica tentando ate o final mesmo que de erro!
        
        // Usando as funções
        ola();

        vervalor(5);

        soma(1,3,5,6,7,8);
    ?>
</body>
</html>