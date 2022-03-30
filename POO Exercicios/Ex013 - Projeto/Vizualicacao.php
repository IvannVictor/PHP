<?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';

    class Vizualizacao{
        private $espectador;
        private $filme;

        public function getEspectador(){
            return $this->espectador;
        }

        public function getFilme(){
            return $this->filme;
        }

        public function setEspectador($espectador){
            $this->espectador = $espectador;
        }

        public function setfilme($filme){
            $this->filme = $filme;
        }


        public function __construct($espectador, $filme){
            $this->setEspectador($espectador);
            $this->setfilme($filme);
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
        }

        public function avaliar(){
            $this->fime->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorcentagem($por){
            $nova = 0;
            if($por <= 20){
                $nova = 3;
            }elseif($por <= 50){
                $nova = 5;
            }elseif($por <= 90){
                $nova = 8;
            }else{
                $nova = 10;
            }
            $this->filme->setAvaliacao($nova);
        }
    }
?>