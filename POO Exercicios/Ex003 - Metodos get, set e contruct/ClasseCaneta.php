<?php
    // Fazendo a criação da classe!
    class Caneta{
        // Criando os atributos!
        public $modelo;  // Definimos se o atrinuto da classe pode ou não ser acessado por qualquer pessoa!
        private $ponta;  // Privado = (-) Ninguem pode acessar esse atributo!
        private $cor;
        private $tampada;

        // Criando os metodos!
        public function __construct($mdl, $pt){  // Metodo que cria altomaticamente a caneta com os paramentros ja passados! O nome  pode ser tambem o nome da classe!
            $this->modelo = $mdl  // Podemos solicitar os atrinutos na hora da criação ou apos!
            $this->ponta = $pt;
            $this->cor = "Azul"; // Desta forma esses sao criados altomaticamente sem precisar preencher nada!
            $this->tampar();
        }

        public function getModelo(){  // Metodo que retorna um valor!
            return $this->modelo;
        }


        public function setModelo($mdl){  // Metodo que recebe um valor!
            $this->modelo = $mdl;
        }


        public function getPonta(){
            return $this->ponta;
        }


        public function setPonta($pt){
            $this->ponta = $pt;
        }


        public function tampar(){
            $this->tampada = true;
        }  
    }
?>