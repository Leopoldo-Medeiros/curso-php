<?php
include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">Desafio Index</div>
            <hr>

            <?php
            $lista = array(
                1,
                4 => 2,
                3 => 3,
                'a' => 4,
                5,
                '9' => 6,
                '06' => 7,
                0 => 8
            );

            // Array( [0] => 1 [4] => 2 [3] => 3 [a] => 4 [5] => 5 )
            // [9] => 6 [06] => 7)
            print_r($lista);
            ?>

        </div>
    </main>
<?php
include "../includes/footer.php";
?>

    <div class="titulo">Desafio Index</div>

<?php
$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

// Array( [0] => 1 [4] => 2 [3] => 3 [a] => 4 [5] => 5 )
// [9] => 6 [06] => 7)
print_r($lista);
