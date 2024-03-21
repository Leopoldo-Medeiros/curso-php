<!--
Exercício:
1. Imprima apenas os valores do array que contém índice par [0, 2, 4, 6]
2. Resolver com for e foreach
3. Valores esperados: AAA, CCC, EEE
-->

<?php
include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">Desafio impressão</div>
            <hr>

<?php
// Definindo o Array
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

// Usando "for loop" para iterar sobre o array
for($i =0; $i < count($array); $i++) {
    if($i %2 === 1) continue;
    echo "{$array[$i]} ";
}

echo "<br>";

// Usando loop foreach
// No foreach ele percorre automaticamente todos os elementos do array
foreach ($array as $chave => $valor) {
    if($chave %2 !== 0) continue;
    echo "$valor ";
}