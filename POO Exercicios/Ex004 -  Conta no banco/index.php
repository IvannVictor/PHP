<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta banco</title>
</head>
<body>
    <?php
        require_once 'banco.php';
        $conta1 = new ContaBanco();  // Conta do Jubileu
        $conta2 = new ContaBanco();  // Conta da Creuza

        // Conta do Jubileu
        $conta1->setDono("Jubileu");
        $conta1->abrirConta("CC");
        $conta1->setNunConta(0001)
        $conta1->depositar(300)
        $conta1->pagarMensal();
        $conta1->sacar(288);
        $conta1->fecharConta();

        // Conta da Creuza!
        $conta2->setDono("Creuza");
        $conta2->abrirConta("CP");
        $conta2->setNunConta(0002);
        $conta2->depositar(500);
        $conta2->sacar(100);
        $conta2->pagarMensal();
        $conta2->fecharConta();

        // Mostrando o resultado!
        print_r($conta1);
        print_r($conta2);
    ?>
</body>
</html>