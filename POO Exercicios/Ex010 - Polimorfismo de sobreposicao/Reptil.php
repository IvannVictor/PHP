<?php
    require_once 'Animal.php';
    class Reptil extends Animal{
        private $corEscama;

        function getCorEscama(){
            return $this->corEscama;
        }

        function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }

        function locomover(){
            echo "<p>Rastejando</p>";
        }
        function alimentar(){
            echo "<p>Coomendo vejetais</p>";
        }
        function emitirSom(){
            echo "<p>Som de reptil</p>";
        }
    }
?>