<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heranca de classe</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professores.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setnome("Ivan");
            $p2->setnome("Carlos");
            $p3->setnome("Bruna");
            $p4->setnome("Fabiana");

            print_r( $p1, $p2, $p3, $p4);
        ?>
    </pre>
</body>
</html>