<?php
    require_once 'Pessoa.php'
    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function cancelarMatricula(){
            echo "Matricula sera cacelada"
        }

        public function getmatricula(){
            return $this->matricula;
        }
        public function getcurso(){
            return $this->curso;
        }

        public function setmatricula($matricula){
            $this->matricula = $matricula;
        }
        public function setcurso($curso){
            $this->curso = $curso;
        }
    }
?>