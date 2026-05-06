<?php  class Avaliador extends Pessoa {
  private string $cpf;
  public function __construct(string $nome, string $cpf) {
    parent::__construct($nome);
    $this->cpf = $cpf;
  }
  public function getCpf(): string { return $this->cpf; }
  public function setCpf(string $c)  { $this->cpf = $c; }
} 