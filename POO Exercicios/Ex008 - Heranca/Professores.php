<?php
    require_once 'Pessoa';
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function receberAumento($salario){
            $this->salario += $salario;
        }

        public function getespecialidade(){
            return $this->especialidade;
        }
        public function getsalario(){
            return $this->salario;
        }

        public function setespecialidade($especialidade){
            $this->especialidade = $especialidade;
        }
        public function setsalario($salario){
            $this->salario = $salario;
        }
    }
?>