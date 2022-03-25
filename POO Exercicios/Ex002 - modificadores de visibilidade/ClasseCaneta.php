<?php
        // Fazendo a criação da classe!
        class Caneta{
            public $modelo;  // Definimos se o atrinuto da classe pode ou não ser acessado por qualquer pessoa!
            public $cor;  // Publico = (+) Qualquer pessoa pode acessar esse atributo!
            private $ponta;  // Privado = (-) Ninguem pode acessar esse atributo!
            protected $carga;  // Protegido = (#) Somente pessoas altorizadas podem acessar!
            protected $tampada;


            // Criando as funções!
            public function rabiscar(){  // O $this referencia ao nome do objeto no programa index.php!
                if($this->tampada == true){
                    echo "Por favor, destampe a caneta para que possamos escrever!";
                }else{
                    echo "Estou escrevendo agora com a sua caneta!...";
                }
            }

            // Podemos inserir modificadores de vizibilidade tambem nas funções!
            public function tampar{  // Metodo criado para tampar a caneta!
                $this->tampada = true;
            }


            public function destampar{  // Metodo criado para destampar a caneta!
                $this->tampada = false;
            }
        }
?>