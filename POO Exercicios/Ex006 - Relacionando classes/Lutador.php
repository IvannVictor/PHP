<?php
    class Lutador{
        // Atributos!
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitoria;
        private $derrotas;
        private $empates;


        // Getter e Setter
        function getNome(){
            return $this->nome;
        }
        function getNacionalidade(){
            return $this->nacionalidade;
        }
        function getIdade(){
            return $this->idade;
        }
        function getAltura(){
            return $this->altura;
        }
        function getPeso(){
            return $this->peso;
        }
        function getCategoria(){
            return $this->categoria;
        }
        function getVitoria(){
            return $this->vitoria;
        }
        function getDerrota(){
            return $this->derrota;
        }
        function getEmpate(){
            return $this->empate;
        }

        function setNome($no){
            $this->nome = $no;
        }
        function setNacionalidade($na){
            $this->nacionalidade=$na;
        }
        function setIdade($id){
            $this->idade = $id;
        }
        function setAltura($al){
            $this->altura = $al;
        }
        function setPeso($pe){
            $this->peso = $pe;
            $this->setCategoria();
        }
        private function setCategoria(){
            if($this->peso < 52.2){
                $this->categoria = "Invalido";
            }elseif($this->peso <= 70.3){
                $this->catergoria = "Leve";
            }elseif($this->peso <= 83.9){
                $this->categoria = "Medio";
            }elseif($this->peso <= 120.2){
                $this->catergoria = "Pesado";
            }else{
                $this->categoria = "Invalido";
            }
        }
        function setVitoria($vi){
            $this->vitoria = $vi;
        }
        function setDerrota($de){
            $this->derrota = $de;
        }
        function setEmpate($em){
            $this->empate = $em;
        }


        // Contrutor!
        public function __construct($no, $na, $id, $al, $pe, $ca, $vi, $de, $em){
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->categoria = $ca; 
            $this->vitoria = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }


        // Metodos!
        function apresentar(){
            echo "<p>CHEGOU A HORA!! O lutador " . $this->getNome();
            echo "veio diretamente de " . $this->getNacionalidade();
            echo "tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
            echo "<br> Ele tem " + $this->getVitoria() + " vitorias, ";
            echo $this->getDerrota() . " derrotas e " . $this->getEmpate() . " empates</p>";
        }
        function status(){
            echo "<br><p>" . $this->getNome() . " e peso " . $this->getCategoria();
            echo " e ja ganhou " . $this->getVitoria() . " vezes, ";
            echo "perdeu " . $this->getDerrota() . " vezes e ";
            echo "empatou " . $this->getEmpate() . " vezes!";
        }
        function ganharLuta(){
            $this->setVitoria($this->getVitoria() + 1);
        }
        function perderLuta(){
            $this->setDerrota($this->getDerrota() + 1);
        }
        function empatarLuta(){
            $this->setEmpate($this->getEmpate() + 1);
        }
    }
?>