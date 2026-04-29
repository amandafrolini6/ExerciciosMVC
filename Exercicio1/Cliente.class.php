<?php 
    class Cliente extends Pessoa
    {
        public funtion __contruct(
            private string $cpf = "",
            //parametros
            string $nome = "",
            array $telefones = array(),
            int $ddd = 0,
            string $numero = ""
            )
            {
                parent:: __construct($nome, $telefones, $ddd, $numero);
            }
            public function get Cpf(){
                return $this->cpf;
            }
            public function setCpf ($cpf){
                this->cpf = $cpf;
            }
    }
?>