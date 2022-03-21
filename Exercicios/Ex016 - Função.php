<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
    <?php
        // Criando a função de soma
        function soma($a, $b){
            $soma = $a + $b;
            echo "A soma de $a + $b = $soma";
        }

    
        // Iniciando a função
        soma(3,5);
        soma(5,5);
        soma(2,54);

        // Inserindo valores a partir de uma variavel
        $valorA = 3;
        $valorB = 9;

        // Inserindo esses valores na função
        soma($valorA, $valorb);


        // Criando uma função com retorno
        function mult($a, $b){
            return $a * $b;
        }


        // Iserindo o resultado do return na  variavel
        $resposta = mult(4, 7);
        echo "O resultado é: $resposta";

        
        // Função com multiplos parametros
        function somamult(){
            // Armazenando os valores inseridos na função!
            $valores = func_get_args();

            // Totalizando a quantidade de valores!
            $total = func_num_args();

            // Armazenando a soma dos valores!
            $soma = 0;

            // Fazendo a soma dos valores
            for($cont = 0; $cont < $total; $cont++){
                $soma = $soma + $valores[$cont];
            }

            // Retornando o resultado!
            return $soma;
        }

        
        // Pegando o resultado da função e armazendo na variavel
        $resp = somamult(1,5,9,2,7,8);

        // Mostrando o resultado da soma
        echo "O resultado da soma é: $resp";
    ?>
</body>
</html>