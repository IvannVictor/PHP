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
            require_once 'Animal';
            require_once 'Peixe';
            require_once 'Mamifero';
            require_once 'Reptil';
            require_once 'Aves';
            require_once 'Canguru';
            require_once 'Arara';
            require_once 'Tartaruga';
            require_once 'Cobra';
            require_once 'Cachorro';

            $m = new Mamifero();
            $r = new Reptil();
            $a = new Aves();

            $m->locomover();
            $r->locomover();
            $a->setPeso(5.5);
        ?>
    </pre>
    
</body>
</html>