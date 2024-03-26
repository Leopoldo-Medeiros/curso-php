<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Operadores Lógicos</div>
        <hr>

        <?php
        echo "<p class='divisao'>Negação Lógica</p><hr>";
        var_dump(true);
        echo '<br>';
        var_dump(!true); // not

        echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
        var_dump(true && true);
        var_dump(true && false);
        var_dump(false && true);
        var_dump(false && false);

        var_dump(true and true);
        var_dump(true and false);
        var_dump(false and true);
        var_dump(false and false);

        echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
        var_dump(true || true);
        var_dump(true || false);
        var_dump(false || true);
        var_dump(false || false);

        var_dump(true or true);
        var_dump(true or false);
        var_dump(false or true);
        var_dump(false or false);

        echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
        var_dump(true != true);
        var_dump(true != false);
        var_dump(false != true);
        var_dump(false != false);

        echo "<p class='divisao'>Exemplo</p><hr>";
        $idade = 65;
        $sexo = 'M';

        $pagouPrevidencia = true;

        $criterioHomem = ($idade >= 65 && $sexo === 'M');
        $criterioMulher = ($idade >= 60 && $sexo === 'F');
        $atingiuCriterio = $criterioHomem || $criterioMulher;
        $podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

        echo "Pode se aposentar -> $podeSeAposentar<br>";

        if ($idade >= 60 && $sexo === 'F') {
            echo "Pode ser aposentar! -> $sexo";
        } elseif ($idade >= 65 && $sexo === 'M') {
            echo "Pode se aposentar! -> $sexo";
        } else {
            echo 'Vai ter que trampar mais um pouco peão!';
        }
        ?>

    </div>
</main>
<?php
include "../includes/footer.php";
?>


