<?php
include "../includes/header.php";
?>
<main class="principal">
	<div class="conteudo">
		<div class="titulo">Desafio Sorteio</div>

		<?php
		$nomes = ["Luciana", "Pedro", "Edson", "Felipe"];

		$nomeSorteado = $nomes[array_rand($nomes)];
		echo "<div center><h1>$nomeSorteado</h1></div>";

		?>

		<style>
			[center] {
				display: flex;
				justify-content: center;
				color: #B71C1C;
			}
		</style>

	</div>
</main>
<?php
include "../includes/footer.php";
?>
