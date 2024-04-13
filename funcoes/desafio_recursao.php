<?php
include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">Desafio Recursão</div>
            <hr>

<?php

/*
 * > 1
 * > 2
 * >> 3
 * >> 4
 * >> 5
 * > 6
 * >> 7
 * >>> 8
 * >>> 9
 * > 10
 */

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    // Precisa verificar se o elemento é array ou não
    // Se o elemento não foi um Array, gera uma condição de parada
    // Se for um Array, eu vou chamar novamente a função recursiva para imprimir um array, so que acrescentando um nivel a mais
    foreach ($array as $elemento) {
        if(is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimirArray($array);
imprimirArray($array, '#');