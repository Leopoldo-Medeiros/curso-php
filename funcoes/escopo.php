<?php
include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">Função & Escopo</div>
            <hr>
<?php

// Aqui estou definindo a função
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima! <br>";
}

// Aqui estou invocando a função. A forma de indentificar isso seria percebendo que existe "()"
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br><hr>";

function trocaValorDeVerdade() {
    // Uma vez que a vairável é global, significa que estou acessando o que está fora da função
    // Resumo: Variaveis locais = Dentro de funções
    // Variaveis globais = fora de funções
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());