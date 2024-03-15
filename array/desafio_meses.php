<<<<<<< HEAD
<?php
include "../includes/header.php";
?>
	<main class="principal">
		<div class="conteudo">
			<div class="titulo">Desafio Meses</div>

			<?php
			$meses = array(
			    // Uma vez que eu altero o primeiro index para ser 1, todos os outros seguirao a sequencia
			    1 => "Janeiro",
			    "Fevereiro",
			    "Março",
			    "Abril",
			    "Maio",
			    "Junho",
			    "Julho",
			    "Agosto",
			    "Setembro",
			    "Outubro",
			    "Novembro",
			    "Dezembro"
			);

			print_r($meses);
			echo '<br>' . $meses[5];
			echo '<br>' . $meses[12];
			?>

	</div>
</main>
<?php
	include "../includes/footer.php";
?>
=======
<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
    // Uma vez que eu altero o primeiro index para ser 1, todos os outros seguirao a sequencia
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];
>>>>>>> c4e8900 (Initial commit)
