<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Constantes</div>
        <hr>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
$TAXA_DE_JUROS = '';
echo '<br>' . $TAXA_DE_JUROS . '!';
// TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
?>

			</div>
		</main>
<?php
include "../includes/footer.php";
?>

echo '<br>' . __DIR__;
