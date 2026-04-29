<?php 
    class Pessoa{
        public funtion __contruct(
            protected string $nome = "",
            // relação
             protected array $telefones = array(),
            //parametros
            int $ddd = 0,
            string $numero = ""
            )
            {
                $this->telefones[] = new Telefone($ddd, $numero);
            }
            public function get Nome(){
                return $this->nome;
            }
            public function setNome ($nome){
                this->nome = $nome;
            }
            public function get Telefones(){
                return $this->telefones;
            }
            public function setTelefones ($ddd, $numero){
                this->telefones[] = new Telenone $ddd, $numeros;
            }
    }
?>