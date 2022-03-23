<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <pre>
        <?php
            // Criando a array!
            $n = array(1,4,8,9);

            // adicionando mais um valor!
            $n[] = 7;

            // Mostrando a array!
            print_r($n);

            // Mostrando o vetor no foreach!
            foreach($n as $v){
                echo "<td>$v";
            }

            // Atribuindo so valores a as sua alocações!
            $v = arrays(1 => "a", 5 => "b");

            // Mostrando!
            print_r($v);

            // Adicionando no final com seguencia n 6!
            $v[] = "c";

            // Mostrando!
            print_r($v);
            
            // Removendo valores!
            unset($v[1]);

            // Mostrando
            print_r($v);

            // Podemos criar arrays com indece de string
            $pessoa = array("nome" => "Ivan", "idade" => "21");

            // Mostrando!
            foreach($pessoa as $campo => $valor){
                echo "O campo $campo atribui o valor $valor";
            }

            // Vetores dentro de vetores!
            $m = array(array(1,2),array(3,4), array(5,6));
            
            // Mostrando
            print_r($m);

            // Alterando valores!
            $m[0][1] = $m[2][0];

            // Mostrando
            print_r($m);

            echo "meu vetor tem". count($m);

            // Colocando mais um elemento usando a funcao array_push()!
            array_push($m, "9");

            // Removendo o ultimo arumento com o uso da funcao array_pop()!
            array_pop($m);

            // Renovendo o primeiro argumento da array com a funcao array_shift()!
            array_shift($m);

            // Ordenado os valores em ordem crescente!
            sort($m);

            // Colocando em ordem decrescente!
            rsort($m);

            // Ordenacao associativa!
            asort($m);  // Neste caso ele coloca os valores em ordem, porem os indices, mantem a primeira associacao!

            // Podemos ordenar os indeces (keys)!
            ksort($m);

            // Podemos fazer tambem em ordem reversa as keys!
            krsort($m);
        ?>
    </pre>
</body>
</html>