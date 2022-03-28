<?php
    // Importndao o controlador
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador{
        // Atribbutos!
        public $volume;
        public $ligado;
        public $tocando;


        // Getter e Setter
        private function getVolume(){
            return $this->volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        private function setVolume($volume){
            $this->volume = $volume;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function setTocando($tocando){
            $this->tocando = $tocando;
        }


        // Metodo contrutor!
        public function __construct(){
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }


        // Criando os metodos
        public function ligar(){
            $this->setLigado(true);
        }

        public function desligar(){
            $this->setLigado(false);
        }

        public function abrirMenu(){
            echo "<br> Esta ligado: ". ($this->getLigado() ? "SIM" : "NAO");
            echo "<br> Esta tocando: ". ($this->getTocando() ? "SIM" : "NAO";)
            echo "<br> Volume: ". $this->getVolume();

            for($i = 0; $i <= $this->getVolume(); $i += 10;){
                echo "|";
            }
            echo "<br>"
        }

        public function fecharMenu(){
            echo "Fechando menu!..."
        }

        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5;);
            }else{
                echo "Nao foi possivel aumentar o volume!";
            }
        }

        public function menosvolume(){
            if($this->getLigado()){
                $this->setVolume(getVolume() - 5);
            }else{
                echo "Nao foi possivel abaixar o volume!";
            }
        }

        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }else{
                echo "Nao foi possivel ligar o mudo!";
            }
        }

        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }else{
                echo "Nao foi possivel tirar do mudo";
            }
        }

        public function play(){
            if($this->getLigado() && !getTocando()){
                $this->setTocando(true);
            }else{
                echo "Nao foi possivel dar play!";
            }
        }

        public function pause(){
            if($this->getLigado() && getTocando()){
                $this->setTocando(false);
            }else{
                echo "Nao foi possivel colocar no pause!";
            }
        }

    }
?>