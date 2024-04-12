<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Funções Anonimas</div>
        <hr>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

// Exemplo 2: Criando uma funcao que tem como parametro outra funcao
// Soma
function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    $resultadoString = "$a $op $b = $resultado";
    $resultadoSemVirgulas = str_replace(',', '', $resultadoString);
    echo $resultadoSemVirgulas;
}
executar(2, 3, '+', $soma);

// Multiplicacao
$multiplicacao = function($a, $b) {
    return $a * $b;
};

echo '<br>';
executar(2, 3, '*', $multiplicacao);

// Divisao
$divisao = function($a, $b) {
    return $a / $b;
};
echo '<br>';
executar(2, 3, '/', $divisao);