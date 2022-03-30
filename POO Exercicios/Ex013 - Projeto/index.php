<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once  'Vizualizacao.php';

            $v[0] = new Video("Aula 01 de POO");
            $v[1] = new Video("Aula 02 de POO");
            $v[2] = new Video("Aula 01 de HMTL");

            print_r($v)


            $p[0] = new Gafanhoto("Ivan", 20, "M", 0001);
            $p[1] = new Gafanhoto("Creuza", 50, "F", 0002);

            print_r($p);

            $vis[0] = new Vizualizacao($p[0], $v[0]);
            $vis[1] = new Vizualizacao($p[1], $v[2]);

            print_r($vis);


            $vis[0]->avaliar();
            $vis[1]->avaliarNota(8);
            $vis[0]->avaliarPor(90);

            comernad
            confiavel2
            oportuno6
            manuteivel4
            extensivo5
            reutilizavel3
            natural1
        ?>
    </pre>
</body>
</html>