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
        $caneta = new Caneta;  // Criamos uma variavel para armazenar os dados da nossa classe caneta!

        // Declarando os atributos!
        $caneta->modelo = "BIC Cristal";
        $caneta->cor = "Azul";
        $caneta->ponta = 0.5;  // Erro, pois o metodo e privado!
        $caneta->tampada = false;  // Erro, objeto protegido!

        // Vamos verificar quais objetos podemos mecher!
        print_r($caneta);

        // Mas como mecher em um metodo privado ou protegido?
        $caneta=>tampar();  // Neste caso temos um metodo publico que tem permissao de mexer no atributo tampada e fazer alterações, que é um metodo protegido!
    ?>
</body>
</html>