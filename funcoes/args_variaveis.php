<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Argumentos Variáveis</div>
        <hr>

<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(12, 14) . '<br>';
echo soma(25, 40, 28 ) . '<br>';

// Os 3 pontos dentro do parametro da funcoa, indicam que todos os parametros passados, mesmo que seja apenas 1
// eles serao colocados dentro de um array
function somaCompleta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);

// Exemplo de membros de um clube
function membros($titular, ...$dependentes) {
        echo "Titular: $titular <br>";
        if($dependentes) {
            foreach($dependentes as $dep) {
                echo "Dependentes: $dep <br>";
            }
        }
}

echo '<br>';
membros("Leopoldo Medeiros", "Pedro", "Luciana");

echo '<br>';
membros("Elon Musk", "Mark");