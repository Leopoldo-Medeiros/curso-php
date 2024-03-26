<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Variáveis Variáveis</div>
		<hr>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';

echo "$epa {$$epa} {$$$epa}";
?>
			</div>
		</main>
<?php
include "../includes/footer.php";
?>
