<?php
    require_once 'Mamifero';
    class Cachorro extends Mamifero{
        function emitirSom(){
            echo "<p>AUAU</p>";
        }

        public function reafirFrase($frase){
            if($frase == "Toma comida!" || $frase == "Ola"){
                echo "<p>Abandar o rabo e latir</p>";
            }else{
                echo "<p>Rosnar</p>";
            }
        }
        public function reagirHora($hora){
            if($hora < 12){
                echo "<p>Abanar o rabo</p>"
            }elseif($hora >= 18){
                echo "<p>Ignorar</p>";
            }else{
                echo "<p>Abanar e latir</p>"
            }
        }
        public function reagirDono($dono){
            if($dono){
                echo "<p>Latir e abanar o roba</p>";
            }else{
                echo "<p>Latir e rosnar</p>";
            }
        }
    }
?>