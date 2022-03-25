<?php
        // Fazendo a criação da classe!
        class Caneta{
            var $modelo;
            var $cor;
            var $ponta;
            var $carga;
            var $tampada;


            // Criando as funções!
            function rabiscar(){  // O $this referencia ao nome do objeto no programa index.php!
                if($this->tampada == true){
                    echo "Por favor, destampe a caneta para que possamos escrever!";
                }else{
                    echo "Estou escrevendo agora com a sua caneta!...";
                }
            }


            function tampar{  // Metodo criado para tampar a caneta!
                $this->tampada = true;
            }


            function destampar{  // Metodo criado para destampar a caneta!
                $this->tampada = false;
            }
        }
?>