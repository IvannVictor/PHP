<?php
    require_once 'AcaoVideo.php';
    class Video extends AcaoVideo{

        // Atributos!
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;


        // Getter e Setter!
        public function getTitulo(){
            return $this->titulo;
        }
        public function getAvaliacao(){
            return $this->avaliacao;
        }
        public function getViews(){
            return $this->views;
        }
        public function getCurtidas(){
            return $this->curtidas;
        }
        public function getReproduzindo(){
            return $this->reprooduzindo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function setAvaliacao($avaliacao){
            $media = ($this->avaliacao + $avaliacao) / $this->views;
            $this->avaliacao = $media;
        }
        public function setViews($views){
            $this->views = $views;
        }
        public function setCurtidas($curtidas){
            $this->curtidas = $curtidas;
        }
        public function setReproduzindo($reproduzindo){
            $this->reproduzindo = $reproduzindo;
        }


        // Metodo contrutor!
        public function __construct($titulo){
            $this->setTitulo($titulo);
            $this->setAvaliacao(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        // Metodos!
        function play(){
            $this->setReproduzindo(true);
        }
        function pause(){
            $this->setReproduzindo(false);
        }
        function like(){
            $this->setCurtidas(getCurtidas() + 1);
        }
    }
?>