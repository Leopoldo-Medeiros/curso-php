<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Usando Tipos</div>
        <hr>
<?php
function somar1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>';

function somar2(int $a, int $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
echo somar2(1, '4dois') . '<br>';

function somar3($a, float $b): int { // : quer dizer que estou separando o nome do método com seus parametros do tipo de retorno(Neste caso vai retornar um valor inteiro = int)
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar3(1, 2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, '4dois') . '<br>';