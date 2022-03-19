<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos e estrutura condicional</title>
</head>
<body>
    <?php 
        // Desclarando as variaveis e iniciando elas atraves da URL do seu navegador!
        $valor1 = $_GET["a"];
        $valor2 = $_GET["b"];
        $operador = $_GET["op"];

        // Mostrando os valores que foram recebidos pela URL!
        echo "Os valores recebidos foram $valor1 e $valor2 <br/>";

        // Calculando resultado, neste caso vamos usar o operador unario que é mais simples!
        $resultado = ($operador == "s") ? $valor1 + $valor2 : $valor1 * $valor2;  // Caso operador seeja igual a "s" ele vai somar os valores de "valor1 + valor2", caso não seja "s", seja qualquer letra, ele ira multiplicar os valores de "valor1" e "valor2" e armazerna o valor em resultado!

        // Mostrando o resultado na tela
        echo "O resultado é $resultado";


        // Vamos para outro teste

        // Declarando as variaveis e preenchendo elas aqui no codigo!
        $numero = 3;
        $texto = "3";

        // Vamos comparar os dois valores se são identicos (tipo e valor) usando o operador ternario!
        $saoIdenticos = ($numero === $texto) "Sim" : "Não";  // Neste caso usamos tres sinais de igual para comparar, tipo e valor, neste caso vemos que se forem identicos o resultado vai ser "sim" e caso seja difrentes em alguma coisa sera mostrado "não"!

        // Mostrando resultado na tela!
        echo "O resultado da comparação entre é: $saoIdenticos";  // Vemos que o resultado é não, pois um é uma string e o outro um valor inteiro, mesmo que seja números um foi inserido como texto e o outro como número, por isso não são identicos mas tem valor igual!
    ?>
</body>
</html>