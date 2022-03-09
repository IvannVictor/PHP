<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritimeticos</title>
</head>
<body>
    <?php
        $n1 = 3;
        $n2 = 2;
        
        $soma = $n1 + $n2;  // Operação de soma!
        echo "A soma dos valores $n1 e $n2 é igual a $soma";  // Nunca esquecer de finalizar com ;(ponto e virgula)!

        $multiplicacao = $n1 * $n2;
        echo "<br/>O produto da multiplicação entre os valoes $n1 e $n2 é igual a $multiplicacao";  // (Mult) *

        // Caso queira ver o resultado na mesma linha sem a necessidade criar um variavel para isso, faça assim👇
        echo "<br/>O resultado da subtração entre os valores $n1 e $n2 é igual a ".($n1 - $n2);  // (Subtração) -

        // Use o .(Ponto) para fazer a contatenação das frases com as variaveis
        echo "<br/>O resultado da divisão entre so valores $n1 e $n2 é igual a ".($n1 / $n2);  // (Divisão) /

        $modulo = $n1 % $n2;  // Modulo seria o resto da divisão
        echo "O valor do modulo entre os numeros $n1 e $n2 é igual a $modulo";  // (Modulo) %

        // Ordem de precedencia
        $media = ($n1 + $n2) / 2;
        echo "A media entre os valores $n1 e $n2 é igual a $media";
        // Precedencia = () /*% +-

        // OBS: Podemos inserir valores atraves da URL da nossa pagina: 
        // http://localhost/aula05/Nome_do_seu_projeto.php?a=3&b=2
        // Mas para que isso funcione, nossas variaveis tambem tem que sofrerem uma alteração
        // $n1 = $_GET[“a”]; $n2 = $_GET[“b”];
    ?>
</body>
</html>