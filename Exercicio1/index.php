<?php
    require_once "Cliente.class.php";
    require_once "Contratado.class.php";
    require_once "Decorado.class.php";
    require_once "Festa.class.php";
    require_once "Pessoa.class.php";
    require_once "Telefone.class.php";

    $cliente = new Cliente("1111111111" "Maria da Silva", array(), 14, "999999999");
    $contratado = new Contratado("222222222222", array(), "Festas Alegria", array(), 14, "988888888");
    $decoracao = new Decoracao ("Rei Leão");
    //instanciar um objeto Festa

    $festa = new Festa("10/04/2026", "15/06/2026", 5000, $cliente, $contratado, $decoracao);
    //mostrar dados do objeto festa
    echo "FESTA<br>";
    echo "Data Contrato: {$festa->getData_contrato()}<br>";
    echo "Data da Fetsa: {$festa->getData_festa()}<br>";
    echo "Valor: R$ " . number_format({$festa->getValor()},2,",",".") . "<br>";

    echo "CLIENTE<br>";
    echo "Nome:{$festa->getCliente()->getNome()}<br>";
    echo "CPF:{$festa->getCliente()->getCpf()}<br>";
    foreach($festa->getTelefones() as $telefone{
        echo "({$telefone->getDdd()}) {$telefone->getNumero()";
    })
    echo "CONTRATADO<br>";
    echo "Nome:{$festa->getContratado()->getNome()}<br>";
    echo "CNPJ:{$festa->getContratado()->getCnpj()}<br>";
    foreach($festa->getTelefones() as $telefone{
        echo "({$telefone->getDdd()}) {$telefone->getNumero()";
    })
    echo "DECORACÃO<br>";
    echo "{$festa->getDecoracao()->getDescritivo()}<br>";
   
    
?>