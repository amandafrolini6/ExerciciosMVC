<?php 
  class Receita {
  private string $nome;
  private string $ingredientes;
  public function __construct(string $nome, string $ing) {
    $this->nome         = $nome;
    $this->ingredientes = $ing;
  }
  public function getNome(): string         { return $this->nome; }
  public function getIngredientes(): string  { return $this->ingredientes; }
  public function setNome(string $n)         { $this->nome = $n; }
  public function setIngredientes(string $i) { $this->ingredientes = $i; }
} 