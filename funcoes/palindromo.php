<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Desafio Palindromo</div>
        <hr>

<?php

// Option #1
// Definindo função
function verificarPalindromo($palavra) {
    $palavra = strtolower(str_replace(' ', '', $palavra)); // Tratamento da palavra
    $palavraInvertida = strrev($palavra); // Verificando se é um Palindromo

    if($palavra == $palavraInvertida) {
        return "Sim";
    } else {
        return "Não";
    }
}

// Test
echo verificarPalindromo("casa") . '<br>';
echo verificarPalindromo("arara") . '<br>';
echo verificarPalindromo("ovo") . '<br>';
echo '<br>';

// Option #2
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo verificarPalindromo("casa") . '<br>';
echo verificarPalindromo("arara") . '<br>';
echo verificarPalindromo("ovo") . '<br>';
echo '<br>';

// Option #3
function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';
}

echo verificarPalindromo("casa") . '<br>';
echo verificarPalindromo("arara") . '<br>';
echo verificarPalindromo("ovo") . '<br>';
echo '<br>';