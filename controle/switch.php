<<<<<<< HEAD
<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Switch</div>
=======
<div class="titulo">Switch</div>
>>>>>>> c4e8900 (Initial commit)

<?php
$categoria = 'wrewrew';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif($categoria === 'Sedan' ) {
    $carro = 'Corolla';
    $preco = 50000;
} elseif ($categoria === 'SUV') {
    $carro = 'Qasqhai';
    $preco = 100000;
} else {
    $carro = 'Peugeot';
    $preco = 2000;
}

$precoFormatacao = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatacao</p>";

$categoria = 'LUXO';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;

    case 'suv':
    case 'suv básico':
        $carro = 'Qasqhai';
        $preco = '100000';
        break;

    case 'sedan':
        $carro = 'Corolla';
        $preco = 80000;
        break;

    default:
        $carro = 'Peugeot';
        $preco = 2000;
}

$precoFormatacao = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatacao</p>";
<<<<<<< HEAD
?>


			</div>
		</main>
<?php
include "../includes/footer.php";
?>
=======
>>>>>>> c4e8900 (Initial commit)
