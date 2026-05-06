<?php class Avaliacao {
  private float     $nota;
  private Avaliador $avaliador; // referência ao objeto
  private Receita   $receita;   // referência ao objeto
  public function __construct(Avaliador $av, Receita $rec, float $nota) {
    $this->avaliador = $av;
    $this->receita   = $rec;
    $this->nota      = $nota;
  }
  public function getNota(): float         { return $this->nota; }
  public function getAvaliador(): Avaliador { return $this->avaliador; }
  public function getReceita(): Receita     { return $this->receita; }
  public function setNota(float $n)         { $this->nota = $n; }
} 