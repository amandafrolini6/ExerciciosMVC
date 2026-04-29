<?php 
    class Contratado extends Pessoa
    {
        public funtion __contruct(
            private string $cnpj = "",
            //relação com festa
            private array $festa = array (),
            //parametros
            string $nome = "",
            array $telefones = array(),
            int $ddd = 0,
            string $numero = ""
            )
            {
                parent:: __construct($nome, $telefones, $ddd, $numero);
            }
            public function get Cnpj(){
                return $this->cnpj;
            }
            public function setCnpj ($cnpj){
                this->cnpj= $cnpj;
            }
            public function get Festa(){
                return $this->festa;
            }
            public function setFesta ($festa){
                this->festa= $festa;
            }
    }
?>