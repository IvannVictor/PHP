<?php
    abstract class Pessoa{

        // Atributos!
        private $nome;
        private $idade;
        private $sexo;
        private $experiencia;


        // getter e setter
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function getExperiencia(){
            return $this->experiencia;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        public function setExperiencia($experiencia){
            $this->experiencia = $experiencia;
        }


        // Metodo construtor!
        public function __construct($nome, $idade, $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setExperiencia(0);
        }


        // Metodos
        protected function ganharExp($xp){
            $this->setExperiencia(getExperiencia() + $xp);
        }
    }
?>