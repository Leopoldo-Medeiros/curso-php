<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Retornando Função</div>
        <hr>

<?php

function soma($a) {
    // Retornando uma funcao anonima
    // O use tem como funcao de cpnseguir usar o valor da variavel $a referente a funcao externa
    return function($b) use ($a) {
        // O valor de $a nao estara dentro desta funcao
        return $a + $b;
    };
}
echo soma(13)(3);

