<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Bolsista';
            require_once 'Aluno';
            require_once 'Pessoa';
            require_once 'Visitante';

            $a1 = new Aluno();
            $a1->serNome("Ivan");
            $a1->serMatricula(1111);
            $a1->setSexo("M");
            $a1->setCurso("Informatica");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            setNome("Carlos")
            setBolsa(1111)
            setMatricula(1112)
        ?>
    </pre>
</body>
</html>