<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Desafio String</div>
        <hr>

        <?php

        // Enunciado:
        // Avaliando os métodos da documentação da string,
        // qual o métodos que a posicao do texto 'abc'
        // Avaliando os métodos da documentação da string,
        // qual o métodos que a posicao do texto 'abc'
        // na string '!AbcaBcabc' retorne 1?

        echo strpos('!AbcaBcabc', 'abc') . '<br>';
        echo stripos('!AbcaBcabc', 'abc') . '<br>';
        ?>
    </div>
</main>
<?php
include "../includes/footer.php";
?>

