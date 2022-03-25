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
        $caneta->cor = "Azul";
        $caneta->ponta = 0.5;
        $caneta->tampada = false;

        // Mostrando o resultado!
        print_r($caneta);

        // Chamando o metodo Rabiscar!
        $caneta->rabiscar();

        // Chamado o metodo para tampar a caneta!
        $caneta->tampar();

        // Pedindo para escrever novamente agora com ela tampada!
        $caneta->rabiscar();

        // Agora pedindo para destampar a caneta para que possamos escrever!
        $caneta->destampar();

        // Chamando o metodo rabiscar para testar!
        $caneta->rabiscar();

    ?>
</body>
</html>