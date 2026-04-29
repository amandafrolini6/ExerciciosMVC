<?php 
    class Telefone {
        public funtion __contruct(
            private int $ddd = 0,
            private string $numero = "",
            // relação com Pessoa
            private ?Pessoa $pessoa = null
        ){
        
            public function get Ddd(){
            return $this->ddd;
            }
            public function setDdd ($ddd){
            this->ddd = $ddd;

            public function get Numero(){
                return $this->numero;
            }
            public function setNumero ($numero){
                this->numero = $numero;
            }
            public function get Pessoa(){
                return $this->pessoa;
            }
            public function setPessoa ($pessoa){
                this->pessoa = $pessoa;
            }
        }
    }
?>