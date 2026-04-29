<?php 
    class Festa {
        public funtion __contruct(
            private string $data_contrato = "",
            private string $data_festa = "",
            private float $valor = 0.00,
            //relação com o cliente
            private ?Cliente $cliente = null,
            // relação com contratado 
            private ?Contratado $contratado = null
            //relação com decoração
            private ?Decoracao $decoracao = null
            ){}
            public function getData_contrato(){
                return $this->valor;
            }
            public function setData_contrato ($data_contrato){
                this->nome = $nome;
            }
            public function getData_valor(){
                return $this->valor;
            }
            public function setData_valor ($data_valor){
                this->data_valor = $data_valor;
            }
            public function getValor(){
                return $this->valor;
            }
            public function setValor ($valor){
                this->valor = $valor;
            }
            public function getCliente(){
                return $this->valor;
            }
            public function setValor ($nome){
                this->nome = $nome;
            }
            public function getContratado(){
                return $this->valor;
            }
            public function setValor ($nome){
                this->nome = $nome;
            }
            public function getDecoracao(){
                return $this->decoracao;
            }
            public function setDecoracao ($decoracao){
                this->decoracao = $decoracao;
            }
    }
?>