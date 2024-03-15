<<<<<<< HEAD
<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Operadores Relacionais</div>
=======
<div class="titulo">Operadores Relacionais</div>
>>>>>>> c4e8900 (Initial commit)

<?php
var_dump(1 == 1); // true
var_dump(1 > 1);  // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111');  // true
var_dump(111 === '111'); // false
var_dump(111 != '111');  // false
var_dump(111 !== '111'); // true
echo "<p>Relacionais no If/Else</p><hr>";
$idade = 15;
if ($idade < 18){
    echo "Menor de Idade = $idade anos<br>";
}
if($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo '<p>Spaceships</p><hr>';
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>

<style>
    p {
        margin-bottom: 0px;
        color: #f60909;
    }
    hr {
        margin-top: 0px;
    }
</style>
<<<<<<< HEAD

			</div>
		</main>
<?php
include "../includes/footer.php";
?>
=======
>>>>>>> c4e8900 (Initial commit)
