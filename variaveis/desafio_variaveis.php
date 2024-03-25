<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Desafio Variáveis</div>
        <hr>

        <?php

        $a = 'Nossa';
        $Nossa = 'Eu';
        $Eu = 'consegui';
        $consegui = 'responder';
        $responder = 'esse';
        $esse = 'desafio';

        echo "Nossa! Eu consegui responder esse desafio.";

        // $a
        echo "<br>";
        echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";
        ?>
    </div>
</main>
<?php
include "../includes/footer.php";
?>

echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";
