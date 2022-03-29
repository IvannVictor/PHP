<?php
    class Pessoa{
        // Atributos!
        private $nome;
        private $idade;
        private $sexo;

        // Getter e Setter!
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
        }

        public function setNome($no){
            $this->nome = $no;
        }
        public function setIdade($id){
            $this->idade = $id;
        }
        public function setSexo($se){
            $this->sexo = $se;
        }


        // Contrutor!
        public function __construct($no, $id, $se){
            $this->setNome($no);
            $this->setIdade($id);
            $this->setSexo($se);
        }
        // Metodo!
        function fazerNiver(){
            $this->setIdade(getIdade() + 1);
        }
    }
?>