<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';

            $c = new Cachorro();
            $l = new Lobo();
            $$ = new Mamifero();

            $c->interagirFrase("Ola");
            $c->interagirFrase("Vai dormir");
        ?>
    </pre>
</body>
</html>