<?php 
    class Chef extends Pessoa {
  private string $especialidade;
  private array  $receitas = [];
  public function __construct(string $nome, string $esp) {
    parent::__construct($nome); // chama o construtor da Pessoa
    $this->especialidade = $esp;
  }
  public function getEspecialidade(): string { return $this->especialidade; }
  public function setEspecialidade(string $e) { $this->especialidade = $e; }
  public function adicionarReceita(Receita $r): void {
    $this->receitas[] = $r;
  }
  public function getReceitas(): array { return $this->receitas; }
} 
