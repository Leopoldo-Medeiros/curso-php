<<<<<<< HEAD
<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Interpolação</div>
=======
<div class="titulo">Interpolação</div>
>>>>>>> c4e8900 (Initial commit)

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s.";
<<<<<<< HEAD
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";
?>
			</div>
		</main>
<?php
include "../includes/footer.php";
?>
=======
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";
>>>>>>> c4e8900 (Initial commit)
