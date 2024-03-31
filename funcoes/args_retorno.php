<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Argumentos e Retorno</div>
        <hr>

<?php

function obterMensagem() {
    return 'Seja bem vindo(a) !';
}

// Maneiras de chamar a função
obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Elon Musk');
echo '<br>', obterMensagemComNome('Pedro');

function soma($a, $b) {
    return $a + $b;
}

$x = 4;
$y = 8;
echo '<br>', soma(43, 35);
echo '<br>', soma(123, 63);

// Passando por cópia
// Neste caso, o que for feito dentro da função não irá gerar impacto naquilo que foi passado como parâmetro
function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

// Passando a referência deste valor como memória
// Beste caso, o que for feito dentro da função irá gerar grande impacto naquilo que foi passado como parâmetro
// Aqui etou passando a referência "$a" para este valor na memória, isso consequentemente ira gerar impacto.
// Pode ser este positivo ou negativo, vai depender do paradigma que isto está sendo aplicado
function trocarValorDeVerdade($a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;


