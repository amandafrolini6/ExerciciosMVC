<?php 
    class Telefone {
  private int $ddd;
  private string $numero;
  public function __construct(int $ddd, string $numero) {
    $this->ddd    = $ddd;
    $this->numero = $numero;
  }
  public function getDdd(): int    { return $this->ddd; }
  public function getNumero(): string { return $this->numero; }
  public function setDdd(int $ddd)       { $this->ddd    = $ddd; }
  public function setNumero(string $n)  { $this->numero = $n; }
} 
  