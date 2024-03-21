<<<<<<< HEAD
<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Desafio PI</div>
=======
<div class="titulo">Desafio PI</div>
>>>>>>> c4e8900 (Initial commit)

<?php

echo pi();
$pi = 3.14;

if($pi === pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
}

if($pi - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!';
<<<<<<< HEAD
}
?>


			</div>
		</main>
<?php
include "../includes/footer.php";
?>
=======
}
>>>>>>> c4e8900 (Initial commit)
