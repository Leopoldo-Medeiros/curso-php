<?php
include "../includes/header.php";
?>
	<main class="principal">
		<div class="conteudo">
			<div class="titulo">$_GET</div>
			<?php
				print_r($_GET);
				echo '<br>';
				print_r($_GET);
				echo "<br>{$_GET['nome']}";
	      // O $_GET serve para coletar parâmetros de requisições, quando a requisição é feita via "GET"\
	      // Exemplo URL: https://curso-php.lndo.site/exercicio.php?dir=array&file=get&nome=Leo
	      // Output: Array ( [dir] => array [file] => get [nome] => Leo )
			?>
