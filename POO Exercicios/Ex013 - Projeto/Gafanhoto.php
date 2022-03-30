<?php
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa{
        private $login;
        private $totalAssistido;

        public function getLogin(){
            return $this->login;
        }
        public function getTotalAssistindo(){
            return $this->totalAssistido;
        }

        public function setLogin($login){
            $this->login = $login;
        }
        public function setTotalAssistido($totalAssistido){
            $this->totalAssistido = $totalAssistido;
        }


        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            $this->setLogin($login);
            $this->setTotalAssistido(0);
        }


        public function assistirMaisUm(){
            $this->setTotalAssistido(getTotalAssistindo() + 1);
        }
    }
?>