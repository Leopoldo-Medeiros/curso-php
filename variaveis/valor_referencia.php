<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Valor vs Referência</div>
        <hr>

        <?php
        $variavel = 'valor inicial';
        echo $variavel;

        // Atribuição por Valor
        $variavelValor = $variavel;
        echo "<br>$variavelValor";
        $variavelValor = 'novo valor';
        echo "<br>$variavel";
        echo " $variavelValor";

        // Atribuição por Referência
        $variavelReferencia = &$variavel;
        $variavelReferencia = 'mesma referencia';

        echo "<br>$variavel $variavelReferencia";
        ?>
    </div>
</main>
<?php
include "../includes/footer.php";
?>
echo "<br>$variavel $variavelReferencia";
