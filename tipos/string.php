<<<<<<< HEAD
<?php
	include "../includes/header.php";
?>
	<main class="principal">
	<div class="conteudo">
		<div class="titulo">Tipo String</div>
=======
<div class="titulo">Tipo String</div>
>>>>>>> c4e8900 (Initial commit)

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo("Nós também" . ' somos' . '<br>');
echo("Número é " . 123);
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe o função print");
print "<br>Também existe o função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
<<<<<<< HEAD
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
?>
			</div>
		</main>
<?php
include "../includes/footer.php";
?>
=======
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
>>>>>>> c4e8900 (Initial commit)
