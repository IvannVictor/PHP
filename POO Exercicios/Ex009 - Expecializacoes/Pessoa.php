<?php
    abstract class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
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

        public final function fazerAniversario(){  // Colocando a palvara Final ela significa que a funcao nao pode mudar ela, (sobre escrever) e na classe ela nao pode ter filhas
            $this->setIdade(getIdade() + 1);
        }
    }
?>