<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">If Else</div>

<?php

if(true){
    echo "Serei impresso?<br>";
}

if(false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(false) {
    echo "Passo A<br>";
} elseif(false) {
    echo "Passo B<br>";
} elseif(true){
    echo "Passo C<br>";
} {
    echo "Ultimo Passo<br>";
}

echo "Fim";
?>


			</div>
		</main>
<?php
include "../includes/footer.php";
?>
