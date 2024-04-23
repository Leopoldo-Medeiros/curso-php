<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Desafio Classe</div>
        <hr>

<?php

class Data{
    public $nome = '';
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function show() {
        return "{$this->nome}{$this->dia}/{$this->mes}/{$this->ano}";
    }
}
$aniversario = new Data();
$aniversario->nome = 'Leo' . ': ';
$aniversario->dia = 1;
$aniversario->mes = 1;
$aniversario->ano = 1970;
echo $aniversario->show(), '<br>';

$casamento = new Data();
$casamento->nome = 'Pedro' . ': ';
$casamento->dia = 15;
$casamento->mes = 04;
$casamento->ano = 2020;
echo $casamento->show();



