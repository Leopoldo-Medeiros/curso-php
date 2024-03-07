<?php
include "../includes/header.php";
?>
	<main class="principal">
		<div class="conteudo">
			<div class="titulo">Arrays Constantes</div>
			<?php
				const FRUTAS = array('Laranja', 'Abacaxi');
				// FRUTAS[0] = 'banana';
				// FRUTAS[] = 'banana;
				echo FRUTAS[0];
				// Basicamente constantes em PHP não podem ser alteradas.
				// Não é mexer no conteúdo do Array

				const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
				// CARROS["BMW"] ='325i';
				echo '<br>' . CARROS["Fiat"];

				define('CIDADES', array('Rio de Janeiro', 'Recife'));
				// CIDADES[0] = 'Minas Gerais';
				echo '<br>' . CIDADES[0];
			?>

	</div>
</main>
<?php
	include "../includes/footer.php";
?>
