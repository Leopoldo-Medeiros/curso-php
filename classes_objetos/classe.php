<?php
include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">Primeira Classe</div>
            <hr>

<?php

class
Cliente
{
    // Atributos
    public $nome = "Pedro";
    public $idade = 20;

    public function show()
    {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}
$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Leo Medeiros';
echo $c1->nome, '<br>';
$c1->idade = 20;

$c2 = New Cliente();
$c2->nome = 'Luciana';
$c2->idade = 25;

echo $c1->show(), '<br>';
echo $c2->show();