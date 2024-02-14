<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// qual o métodos que a posicao do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));
?>
			</div>
		</main>
<?php
include "../includes/footer.php";
?>
