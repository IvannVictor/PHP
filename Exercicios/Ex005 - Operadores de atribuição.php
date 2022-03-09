<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <?php
    $a = 3;
    $b = 4;

    // Quando a variavel recebe ela mesma mais um valor voce pode escreve-la desta forma👇.
    $c = $c + 5;
    $c += 5;

    // Isso vale tambem para outros operadores aritimeticos.
    $c = $c – $a; 
    $c -= $a;
    
    // Neste caso, temos um tres variações de escrita, quando a variavel for receber o numero 1 basta colocar ++.
    $c = $c + 1; 
    $c += 1;
    $c++;

    // Exemplos
    // Lembrando que voce pode escrever assim para receber valores atraves da sua URL $n1 = $_GET[“a”];
    $preco = $_GET[“p”];
    echo "O valor do produto é R$".number_format($preco,2,",",".");

    // Acrescentando 10% de aumento no valor.
    $preco += ($preco * 10 / 100);
    echo "<br/>O valor com 10% de aumento agora é de R$".number_format($preco,2,",",".");

    // Agora vamos retirar 20%, será o desconto que o cliente ganhou!
    $preco -= ($preco * 20 / 100);
    echo "<br/>O valor com desconto de 20% é de R$".number_format($preco,2,",",".");

    // Vamos para mais um exemplo, neste vamos pegar o ano atual e tirar 1;
    $ano = 2022;
    echo "<br/>O ano atual é $ano e o ano anterior foi ".$ano--;

    // Caso tenha reparado, deu erro, mostrou para voce o ano de atual novamente. Isso chama-se pós-decremento, isso que dizer que só vai retirar 1 da variavel apos mostra ela, caso tivesse outro echo apos, iria mostrar o valor correto, para corrigir isso temos que fazer o pré-decremento, quando tiramos o valor da variavel antes de mostrar ela!
    echo "<br/>O ano atual é $ano e o ano anterior foi ".--$ano;

    // Lembrando que isso server tambem para incremento, quando vamos acrescentar a soma de 1 a variavel.
    echo "<br/>O ano atual é $ano e ano que vem é ".ano++;

    //Neste caso vemos que mostrou o ano atual novamente. Vamos corrigir.
    echo "<br/>O Ano atual é $ano e o ano que vem é ".++$ano;
    ?>
</body>
</html>