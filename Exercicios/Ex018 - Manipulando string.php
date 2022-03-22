<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando string</title>
</head>
<body>
    <?php
        // Declarando as variaveis!
        $prod = "Leite";
        $valor = 4.5;

        // Formas de mostra na tela!
        echo "O produto $prod custa R$".number_format($valor,2);  // Forma comum de mostrar na tela!
        printf ("O produro %s custa R$%.2f", $prod, $valor);  // Print formatado!

        // Criando um vetor!
        $x[0] = 1;
        $x[1] = 5;
        $x[2] = 3;
        $x[3] = 9;

        // Mostrando na tela com funções especificas!
        print_r ($x);  // Mais usado para mostra os dados de vetor!
        var_dump ($x);  // Mais usado para mostra os dados de vetor!
        var_export ($x);  // Mais usado para mostra os dados de vetor!

        // Criando uma string para ver o uso do wordwrap!
        $texto = "Aqui esta um texto com um tamanho um pouco comprido para testarmos a usabilidade da função wordwrap, onde você consegue quebra o texto em linha com a quantidade de caracteres que você desejar.";

        // Criando as quebras de linha com o wordwrap!
        $txtquebrada = wordwrap($texto, 20);  // Neste caso que o texto no codigo fonte, mas não mostra na tela!
        $txvizivel = wordwrap($texto, 20, "<br>");  // Neste caso fica vizivel na tela a quebra e no codigo!
        $txtpalavra = wordwrap($texto, 5, "<br>\n", true);  // Neste caso quebramos as palavras para que ela fique apenas com 5 letras por linha!

        // Mostrando o resultado!
        echo "$txtquebrada";  // Mostrando o resultado do wordwrap!
        echo "$txvizivel";  // Mostrando o resultado do wordwrap!
        echo "$txtpalavra";  // Mostrando o resultado do wordwrap!

        // Uso das funções trim, ltrim e rtrim
        $frase = "   Aqui temos uma frase com espaço no começo e no final   ";
        $qtdcarac = strlen($frase);  // Aqui temos a quantidade de caracteres com os espaços no fim e no começo!
        $novaqtd = trim($frase);  // Removendo os espaços no sim e no começo!
        $comeqtd = ltrim($frase);  // Removendo do começo!
        $fimqtd = rtrim($frase);  // Removendo do final!

        // Mostrando o resultado!
        echo "Total: $qtdcarac";
        echo "Com o uso do trin: ".strlen($novaqtd);
        echo "Com o uso do ltrin".strlen($comeqtd);
        echo "Com o uso do rtrin".strlen($fimqtd);

        // Uso do str_word_count!
        $frase2 = "Aqui uma frase para ver o uso da função";
        $contpalavras = str_word_count($frase2, 0);  // Aqui ele conta as palavras da frase!
        $vetorpalavra = str_word_count($frase2, 1);  // Coloca cada palavra em um vetor!
        $posipalavra = str_word_count($frase2, 2);  // Mostra qual posição inicia cada palavra!

        // Uso da função explode!
        $frase3 = "Essa frase tem como finalidade mostrar o uso da função explode";
        $vetor = explode(" ", $frase3);  // Neste caso podemos escolher o que vai separar as palavras para colocar no vetor, no exemplo acima é os espaços em branco!
        
        // Mostrando o resultado!
        print_r ($vetor);

        // Uso da função str_split!
        $nome = "Ivan";
        $nomevetor = str_split($nome);  // Neste caso a função vai colocar cada letra em um campo de vetor!

        // Resultado da função!
        print_r ($nomevetor);

        // Uso da função implode!
        $palavar[0] = "Ivan";
        $palavar[1] = "Victor";
        $nm = implode(" ", $palavar);  // Esta função junta as palavras do vetor, pode ser por espaço ou por qualquer caractere de sua escolha, formando a frase!
        $mn = join("#", $palavar);  // Mesma função do implode

        // Mostrando o resultado!
        echo "$nm";
        echo "$mn";

        // Uso da função chr!
        $nunletra = chr(67);  // Esta função mostra que letra esta relacionada ao codigo
        $nunletram = chr(99);

        // Mostrando o resultado
        echo "A letra no codigo 67 é: $nunletra";
        echo "A letra no codigo 99 é: $nunletram";

        // Uso da função ord!
        $codletra = ord("c");  // Esta função mostra o codigo relacionado a letra!
        $codletram = ord("C");

        // Mostrando o resultado
        echo "O codigo da letra 'c' é: $codletra";
        echo "O codigo da letra 'C' é: $codletram";

        // Uso da função strtolower!
        $nomen = "Ivan Victor";
        $nomelower = strtolower($nomen);  // Função para manter todas a letras minusculas

        // Resultado
        echo "Seu nome é: $nomelower";

        // Uso da função strtoupper!
        $nomem = "Ivan Victor";
        $nomeupper = strtoupper($nomem);  // Função usada para colocar todas as letras maiusculas!

        // Mostrando o resultado!
        echo "O seu nome é: $nomeeupper";

        // Uso da função ucfirst!
        $nom = "ivan victor";
        $nomepri = ucfirst($nom);  // Coloca a primeira letra da frase em maiuscula!

        // Mostrando o resultado!
        echo "O seu nome é: $nomepri";

        // Uso da função ucwords!
        $nome1 = "ivan victor";
        $nomemai = ucwords($nome1);  // Deixa a primeira letra de cada palavra em maiuscula!

        // Mostrando o resultado!
        echo "O seu nome é: $nomemai";

        // Uso da função strrev!
        $nome2 = "Ivan Victor";
        $nomerev = strrev($nome2);  // Escreve todas as palavras de tras para frente!

        // Mostrando o resultado!
        echo "O seu nome ao contrario fica: $nomerev";

        // Uso da função strpos!
        $frase4 = "Estamos vendo funções em PHP";
        $posphp = strpos($frase4, "PHP");  // Essa função localiza em qual posição inicia o item produrado!

        // Mostrando o resultado!
        echo "A palavra PHP começa na posição: $posphp";

        // Uso da função stripos!
        $frase5 = "Estamos vendo funções em php";
        $posiphp = stripos($frase4, "PHP");  // Essa função localiza em qual posição inicia o item produrado ignorando se ela esta em maiusculo ou não!

        // Mostrando o resultado!
        echo "A palavra PHP começa na posição: $posphp";

        // Uso da função substr!
        $frase6 = "Olá mundo";
        $subfrase = substr($frase6, 0, 5);  // Função usada para mostrar a partir de uma posição!
        $subfrase1 = substr($frase6, -5, 2);

        // Vendo o resultado
        echo "$subfrase";
        echo "$subfrase1";

        // Uso da funação str_pad!
        $nome3 = "Ivan";
        $nomedireita = str_pad($nome3, 10, "*", STR_PAD_RIGHT);  // Usado para colocar * ou qualquer caracteres que desejar a direta do valor da variavel ate completar o total de 10 caracteres!
        $nomecenter = str_pad($nome3, 10, "$", STR_PAD_CENTER);  // A variavel ficara alocada no centro dos caracteres solicitados ate preencher o total de 10 como solicitado!
        $nomeesquerda = str_pad($nome3, 10, "#", STR_PAD_LEFT);  // Colocará os caracteres a esquerda da variavel para completar 10 caracteres!

        // Mostrando o resultado!
        echo "$nomedireita";
        echo "$nomecenter";
        echo "$nomeesquerda";

        // Uso do str_repeat!
        $txt = "PHP";
        $txt2 = "-";
        $txtrep = str_repeat($txt, 5);  // Funçaõ usada para repetir quantas vezes quiser o valor de uma variavel!
        $txt2rep = str_repeat($txt2, 5);

        // Mostrando na tela!
        echo "$txtrep";
        echo "$txt2rep";

        // Uso da função str_replace!
        $frase7 = "Eu amo Matematica";
        $frasereplace = str_replace("Matematica", "programação", $frase7);  // Substitui a palavra desejada fa variavel!

        // Mostrando o resultado!
        echo "$frasereplace";
    ?>
</body>
</html>