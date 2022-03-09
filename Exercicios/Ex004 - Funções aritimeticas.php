<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritimeticas</title>
</head>
<body>
    <?php
        $n1 = 5;
        $n2 = 25;
        $n3 = -4;
        $n5 = 7.8;
        $n6 = 7.4;


        // A função abs(): Retorna o valor absoluto de um número. Ex: abs(-5) = 5.
        echo "O valor absoluto de $n3 é ".abs($n3);

        // A função pow() : Calcula uma potência. Ex: pow(3,2) = 32 = 9.
        echo "<br/>A potencia de $n1 elevados a $n2 é ".pow($n1, $n2);

        // A função sqrt() : Calcula a raiz quadrada de um número. Ex: sqrt(25) = 5.
        echo "<br/>A raiz quadrada de $n2 é ".sqrt($n2);

        // A função round() : Arredonda valores. Ex: round(3.8) = 4. Igual a 5 ou superior, arredonda para cima, abaixo de 5 para baixo. Ainda existem os métodos ceil() e floor() para arredondamentos para cima e para baixo, respectivamente.
        echo "<br/>Arredondando o valor $n5 fica ".round($n5);
        echo "<br/>Arredondando o valor $n6 fica ".round($n6);

        // A função intval() : Trunca um número. Retorna a parte inteira de um valor. intval(5.7) = 5. OBS: Esta função não arredonda o valor, ela ignora o numero apos o ponto e mostra a parte inteira do valor.
        echo "<br/>A parte inteira do valor $n6 é ".intval($n6);

        //number_format() : Formata um número Real. Ex: number_format(3258.754, 2, “,”, “.”) = 3.258,75.
        echo "<br/>O valor $n2, em reias fica R$".number_format($n2,2,",",".");
    ?>
</body>
</html>