<?php
global $status;
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Operador Ternário</div>
        <hr>

        <?php
        $idade = 70;
        $status;

        if ($idade >= 18) {
            $status = 'Maior de idade';
        } else {
            $status = 'Menor de idade';
        }

        echo "$status<br>";

        $idade = 17;
        $status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
        echo "$status<br>";
        ?>


    </div>
</main>
<?php
include "../includes/footer.php";
?>

