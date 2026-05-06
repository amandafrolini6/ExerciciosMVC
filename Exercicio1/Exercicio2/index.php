<?php

// Importa todas as classes
require_once 'classes/Telefone.php';
require_once 'classes/Pessoa.php';
require_once 'classes/Chef.php';
require_once 'classes/Avaliador.php';
require_once 'classes/Receita.php';
require_once 'classes/Avaliacao.php';

// Aqui vem tudo que estava no painel "Instância"
$tel = new Telefone(14, "99999-1234");

$avaliador = new Avaliador("Julia Souza", "123.456.789-00");
$avaliador->adicionarTelefone($tel);

$chef    = new Chef("Carlos Lima", "Confeitaria");
$receita = new Receita("Bolo de Cenoura", "cenoura, farinha, ovos, açúcar");
$chef->adicionarReceita($receita);

$avaliacao = new Avaliacao($avaliador, $receita, 9.5);

// Exibição
echo "=== AVALIAÇÃO ===" . PHP_EOL;
echo "Nota        : " . $avaliacao->getNota()                       . PHP_EOL;
echo "Avaliador   : " . $avaliacao->getAvaliador()->getNome()       . PHP_EOL;
echo "CPF         : " . $avaliacao->getAvaliador()->getCpf()        . PHP_EOL;
$tels = $avaliacao->getAvaliador()->getTelefones();
echo "Telefone    : (" . $tels[0]->getDdd() . ") " . $tels[0]->getNumero() . PHP_EOL;
echo "Receita     : " . $avaliacao->getReceita()->getNome()         . PHP_EOL;
echo "Ingredientes: " . $avaliacao->getReceita()->getIngredientes() . PHP_EOL;