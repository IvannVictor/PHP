<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>
    <pre>
        <?php
            // Importando as classe!
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            // Criando as pessoas!
            $pessoa[0] = new Pessoa("Ivan", 20, "M");
            $pessoa[1] = new Pessoa("Maria", 21, "F");

            // Criando os livros!
            $livro[0] = new Livro("PHP Basico", "Jose da Silva", 300, $pessoa[0]);
            $livro[1] = new Livro("POO com PHP", "Maria de Souza", 500, $pessoa[0]);
            $livro[2] = new Livro("PHP Avancado", "Ana Paula", 800, $pessoa[1]);

            // Mostrando os detalhes!
            $livro[0]->abrir();
            $livro[0]->folhear(100);
            $livro[0]->detalhes();
        ?>
    </pre>
</body>
</html>