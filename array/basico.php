<<<<<<< HEAD
<?php
include "../includes/header.php";
?>
<main class="principal">
	<div class="conteudo">
		<div class="titulo">Array</div>
		<?php
			$lista = array(1, 2, 3.4, "texto");
			echo $lista . '<br>';
			var_dump($lista);
			echo '<br>';
			print_r($lista);
			echo '<br>';

			$lista[0] = 5432;
			print_r($lista);

			echo '<br>' . $lista[0];
			echo '<br>' . $lista[1];
			echo '<br>' . $lista[2];
			echo '<br>' . $lista[3];
			echo '<br>';


			$texto = 'Leopoldo Ferreira Medeiros';
			echo '<br>' . $texto[0];
			echo '<br>' . $texto[1];
			echo '<br>' . $texto[11]; // Cuidado!
			echo '<br>' . mb_strstr($texto, 10, 3);
		?>
	</div>
</main>
<?php
	include "../includes/footer.php";
?>
=======
<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);
echo '<br>';

$lista[0] = 5432;
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';


$texto = 'Leopoldo Ferreira Medeiros';
echo '<br>' . $texto[0];
echo '<br>' . $texto[1];
echo '<br>' . $texto[11]; // Cuidado!
echo '<br>' . mb_strstr($texto, 10, 3);
>>>>>>> c4e8900 (Initial commit)
