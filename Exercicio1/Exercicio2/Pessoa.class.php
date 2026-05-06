<?php class Pessoa {
  protected string $nome;         // # no diagrama = protected
  private array  $telefones = []; // lista de objetos Telefone
  public function __construct(string $nome) {
    $this->nome = $nome;
  }
  public function getNome(): string { return $this->nome; }
  public function setNome(string $n)  { $this->nome = $n; }
  public function adicionarTelefone(Telefone $tel): void {
    $this->telefones[] = $tel; // adiciona na lista
  }
  public function getTelefones(): array { return $this->telefones; }
} 