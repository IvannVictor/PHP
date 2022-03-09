<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <?php
        $nome = "Ivan";  // Toda variavel em PHP é declarada inicialmente com $!

        $idade = 21;  // O PHP faz a diferenciação entre as letras maiúsculas e minúsculas, por isso recomendamos que você utilize apenas identificadores com letras minúsculas em seus scripts PHP.

        $salario = (real)1200.00  // Você pode forçar um tipo primitivo a uma variável por TYPECAST, utilizando (int) (real) (float) (double) (string) antes do valor na atribuição. Ele identifica só, mas voce pode colcoar!

        $casaso = false;  // Não existe typecast para variáveis lógicas. Os valores booleanos são considerados números, sendo o valor 1 atribuído para true e vazio para false.

        echo $nome." tem ".$idade." anos!"  // Pode ser escrito desta forma um pouco mais chata!

        // Sempre use a tag <br/> quando for pular de liha em seu documento
        echo "<br/>$nome tem $idade anos!"  // Mas pode ser tambem dessa mais simples, mas sempre em aspas duplas("")!

        echo '<br/>$nome tem $idade anos!'  // Caso contrario ele mostra o nome da variavel e não o valor!

        // Agora vamos referenciar as variaves! Variaveis referenciadas é quando uma variavel tem relação com a outra, veja a seguir👇.

        $a = 3;
        $b = $a;
        $b += 2;
        
        // Neste caso vemos que nada mudou na variavel a somente na b, neste caso voce ja sabia o que iria acontecer, vamos mostrar na tela.
        echo $a;
        echo $b;

        // Vamos fazer novamente, mas vamos referenciar.
        $a = 3;
        $b = &$a;
        $b += 2;

        // Para sabermos que uma variavel foi referenciada, analisamos ela e identificamos o sinal de & que vem antes da variavel, veja agora o que aconteceu.
        echo $a;
        echo $b;

        // Isso mesmo, o valor de b foi atribuido para a variavel a, isso que é variavel referenciada.


        // Variaveis variaveis, quando o valor de uma variavel vira uma variavel.
        $variavel = abc;
    
        // Neste caso dizemos que a variavel tem o valor ABC.
        $$variavel = def;

        // E neste caso o valor da variavel, foi transformado em variavel e recebeu o valor DEF;
        echo "O valor da variavel é $variavel"
        echo "<br/>E o valor de tem a o valor $abc"

        // Lembrando que variaveis tem que ser inicializadas com letras, nunca numeros, neste caso apos o $ tem que vir alguma letra, idependente se maiuscula ou minuscula, pode ate ser _(anderline), mas nunca numeros.

        
    ?>
</body>
</html>