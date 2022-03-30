<?php
    require_once 'Aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

        function renovarBolsa(){
            echo "Bolsa renovada"
        }

        function pagarMensalidade(){
            echo "<p>$this->nome e bolsista e paga com desconto!</p>"
        }
    }
?>