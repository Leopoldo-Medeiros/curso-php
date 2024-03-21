<?php
include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">Foreach</div>
            <hr>

<?php
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

echo "<hr>";

foreach($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach($matrix as $linha) {
//    echo "$linha <br>";
    foreach ($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);