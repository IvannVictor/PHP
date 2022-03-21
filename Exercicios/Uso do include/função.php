<?php
    // Neste caso não precisa de codigo html pois esse aqui é somente as funções que serão importadas para o programa principal
    function ola(){
        echo "Olá mundo!";
    }


    function vervalor($valor){
        echo "O valor passado para a função foi: $valor";
    }

    
    function soma(){
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
?>