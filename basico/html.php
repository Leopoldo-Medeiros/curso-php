<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Integração HTML</div>
        <hr>

        <h1>
            <?php
            echo 'Olá';
            echo '<small>';
            echo ' Mundo!';
            echo '</small>';
            ?>
        </h1>

        <?= "<div>Outra forma de me 'expressar'!</div>" ?>

        <br>
        <div>
            <button><?= "Legal" ?></button>
        </div>

    </div>
</main>
<?php
include "../includes/footer.php";
?>
<div>
    <button><?= "Legal" ?></button>
</div>
