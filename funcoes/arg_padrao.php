<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Argumento Padrão</div>
        <hr>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(NULL);
saudacao(null, NULL);
saudacao('Mestre', 'Supremo');

// Por padrao, a bebida será Água
function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// Nao precisa passar o segundo parametro, uma vez que ja existe um valor padrao para o mesmo
anotarPedido('Lasanha');
anotarPedido('Pizza', 'Refrigerante');

// Approach 2
function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// Desse jeito nao vai funcionar. Pois está substituindo o hamburger pela agua.
//anotarPedido2('Hamburger');
anotarPedido2('Refrigerante2', 'Pizza2');