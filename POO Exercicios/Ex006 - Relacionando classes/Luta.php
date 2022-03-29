<?php
    require_once 'Lutador.php';
    class Luta{
        // Atributo!
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;


        // Getter e setter
        function getdesafiado(){
            $this->desafiado;
        }
        function getdesafiante(){
            $this->desafiante;
        }
        function getrounds(){
            $this->rounds;
        }
        function getaprovada(){
            $this->aprovada;
        }

        function setdesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        function setdesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
        function setrounds($rounds){
            $this->rounds = $rounds;
        }
        function setaprovada($aprovada){
            $this->aprovada = $aprovada;
        }


        // Metodos
        public function marcaLuta($lutador1, $lutador2){
            if($lutardor1->getCategoria() === $lutador2->getCategoria() && $lutador1 != $lutador2){
                $this->setaprovada(true);
                $this->setdesafiado($lutador1);
                $this->setdesafiante($lutador2);
            }else{
                $this->setaprovada(false);
                $this->setdesafiante(null);
                $this->setdesafiado(null);
            }
        }
        public function lutar(){
            if($this->getaprovada()){
                $this->getdesafiado()->apresentar();
                $this->getdesafiante()->apresentar();
                $vencedor = rand(0,2);

                switch($vencedor){
                    case 0:  // Empate
                        echo "<p>Empate!</p>";
                        break;
                    case 1:
                        echo "<p>" . $this->getdesafiado()->getNome() . " venceu!</p>";
                        $this->getdesafiado()->ganharLuta();
                        $this->getdesafiante()->perderLuta();
                        break;
                    case 2:
                        echo "<p>" . $this->getdesafiante()->getNome() . " venceu</p>";
                        $this->getdesafiado()->perderLuta();
                        $this->getdesafiante()->ganharLuta();
                        break;
                }
            }else{
                echo "Luta nao pode acontecer!";
            }
        }

    }
?>