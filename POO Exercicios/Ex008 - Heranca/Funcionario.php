<?php
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }

        public function getsetor(){
            return $this->setor;
        }
        public function gettrabalhando(){
            return $this->trabalhando;
        }

        public function setsetor($setor){
            $this->setor = $setor;
        }
        public function settrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }
    }
?>