<div class="titulo">Desafio Sorteio</div>

<?php
// Desafio: Use um h1 para imprimir todos os nomes. Toda vez que atualizar a página, printa um nome diferente
$nomes = ["Luciana", "Pedro", "Edson", "Felipe"];

$nomeSorteado = $nomes[array_rand($nomes)];
echo "<div center><h1>$nomeSorteado</h1></div>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
        color: #B71C1C;
    }
</style>
