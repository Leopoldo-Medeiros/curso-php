<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "azul",
    "peso" => 76.4
);

print_r($dados);

var_dump([$dados[0]]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_info"]);

$lista = array (
    "a",
    "cinco" => "b",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

$lista[false] = 'Tentei indexar com false!';
echo '<br>';
print_r($lista);

$lista[true] = 'Tentei indexar com true!';
echo '<br>';
print_r($lista);