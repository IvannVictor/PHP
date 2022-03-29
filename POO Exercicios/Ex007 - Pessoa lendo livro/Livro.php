<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro{
        // Atributos!
        private $titulo;
        private $autor;
        private $totalPaginas;
        private $paginaAtual;
        private $aberto;
        private $leitor;

        // Getter e Setter
        public function gettitulo(){
            return $this->titulo;
        }
        public function getautor(){
            return $this->autor;
        }
        public function gettotalPaginas(){
            return $this->totalPaginas;
        }
        public function getpaginaAtual(){
            return $this->paginaAtual;
        }
        public function getaberto(){
            return $this->aberto;
        }
        public function getleitor(){
            return $this->leitor;
        }

        public function settitulo($titulo){
            $this->titulo = $titulo;
        }
        public function setautor($autor){
            $this->autor = $autor;
        }
        public function settotalPaginas($totalPaginas){
            $this->totalPaginas = $totalPaginas;
        }
        public function setpaginaAtual($paginaAtual){
            $this->paginaAtual = $paginaAtual;
        }
        public function setaberto($aberto){
            $this->aberto = $aberto;
        }
        public function setleitor($leitor){
            $this->leitor = $leitor;
        }

        // Contrutor!
        public function __construct($titulo, $autor, $totalPaginas, $leitor){
            $this->settitulo($titulo);
            $this->setautor($autor);
            $this->settotalPaginas($totalPaginas);
            $this->setaberto(false);
            $this->setpaginaAtual(0);
            $this->setleitor($leitor);
        }


        // Metodos!
        public function detalhes(){
            echo "Livro " . $this->gettitulo() . " escrito por ". $this->getautor() . ".";
            echo "<br>Paginas: " . $this->gettotalPaginas();
            echo "<br>Sendo lido por: " . $this->getleitor()->getNome();
        }
        public function abrir(){
            $this->setaberto(true);
        }
        public function fechar(){
            $this->setaberto(false);
        }
        public function folhear($pag){
            if($pag > $this->gettotalPaginas()){
                $this->setpaginaAtual(getpaginaAtual() = 0);
            }else{
                $this->setpaginaAtual(getpaginaAtual() = $pag);
            }
        }
        public function avancarPag(){
            if($this->gettotalPaginas()){
                $this->setpaginaAtual(getpaginaAtual() + 0);
            }else{
                $this->setpaginaAtual(getpaginaAtual() + 1);
            }
        }
        public function voltarPag(){
            if($this->gettotalPaginas()){
                $this->setpaginaAtual(getpaginaAtual() + 0);
            }else{
                $this->setpaginaAtual(getpaginaAtual() - 1);
            }
        }
    }
?>