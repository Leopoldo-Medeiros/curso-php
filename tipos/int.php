<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Tipo Inteiro</div>
        <hr>

        <?php
        echo 11;
        echo '<br>';

        var_dump(11);
        echo '<br>';

        echo PHP_INT_MAX, '<br>';
        echo PHP_INT_MIN, '<br>';
        echo 017, '<br>'; // Base octal
        echo 0b11000111001, '<br>'; // Base binária
        echo 0x117acf0; // Base hexa
        ?>
    </div>
</main>
<?php
include "../includes/footer.php";
?>

