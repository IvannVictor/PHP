<?php
    class ContaBanco(){
        // Declarando os atributos!
        public $nunConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        
        // Declarando os metodos
        public function __construct(){
            $this->saldo = 0;
            $this->status = false;
            echo "<p>Conta criado com sucesso</p>"
        }

        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true)

            if($t == "CC"){
                $this->setSaldo(50);
            }elseif($t == "CP"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->saldo > 0){
                echo "<p>A valores em conta, saque antes de encerrar a sua conta!</p>";
            }elseif($this->saldo < 0){
                echo "<p>A valores em aberto em sua conta, regularize seu debito antes de encerrar a conta!</p>";
            }
        }

        public function depositar($v){
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() + $v);
            }else{
                echo "<p>Impossivel depositar</p>"
            }
        }

        public function sacar($v){
            if($this->getStatus() == true){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v;)
                    echo "<p>Saque de R$$v realizado com sucesso!</p>";
                }else{
                    echo "<p>Saldo insuficiente!</p>";
                }
            }
        }

        public function pagarMensal(){
          var $v;
          if($this->getTipo() == "CC"){
              $v = 12
          }elseif($this->getTipo() == "CP"){
              $v = 20;
          }

          if($this->getStatus() == true){
              if($this->getSaldo() > $v){
                $this->setSaldo(getSaldo() - $v;)
              }else{
                  echo "<p>Saldo insuficiente!</p>"
              }
          }

          echo "<p>Impossivel debitar o valor da mensalidade!</p>"
        }


        // Getter e setter
        public function setNunConta($nun){
            $this->nunConta = $nun;
        }

        public function getNunConta(){
            return $this->nunConta;
        }

        public function setTipo($tp){
            $this->tipo = $tp;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setDono($dn){
            $this->dono = $dn;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($st){
            $this->status = $st;
        }

        public function getStatus(){
            return $this->status;
        }
    }
?>