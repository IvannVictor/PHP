<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutador</title>
</head>
<body>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        // Criando os lutadores!
        $lutador = array;
        $lutador[0] = new Lutador("Pretty Boy", "Franca", 30, 1.77, 68.9, 11, 2, 1);

        $lutador[1] = new Lutador("Ivan", "Sao Paulo", 20, 1.70, 75, 15, 0, 5;

        $lutador[2] = new Lutador("Carlos", "Sao Paulo", 28, 1.60, 80, 13, 2, 7);

        $lutador[3] = new Lutador("Jeovane", "EUA", 38, 1.60, 68.9, 10, 2, 3);

        $lutador[4] = new Lutador("Erique", "Inglaterra", 40, 1.65, 60, 5, 8, 4);

        $lutador[5] = new Lutador("Felipe", "Franca", 30, 1.77, 68.9, 11, 2, 1);

        // Iniciando as lutas!
        $luta1 = new Luta();
        $luta1->marcarLuta($lutador[0], $lutador[1]);
        $luta1->lutar();

        // Depois da luta
        $lutador[0]->status();
        $lutador[1]->status();
    ?>
</body>
</html>