<?php
include "../includes/header.php";
?>
	<main class="principal">
		<div class="conteudo">
			<div class="titulo">Comparação Arrays</div>

			<?php
			$arr1 = ['nome' => 'Leo', 'idade' => 37];
			$arr2 = ['nome' => 'Leo', 'idade' => 37];
			var_dump($arr1 == $arr2);
			var_dump($arr1 === $arr2);

			$arr3 = ['idade' => 37, 'nome' => 'Leo'];
			echo '<br>';
			var_dump($arr1 == $arr3); // Mesmo na ordem inversa, o valor ainda eh true
			var_dump($arr1 === $arr3);
			var_dump($arr1 != $arr3);
			var_dump($arr1 !== $arr3);

			echo '<br>';
			$arr4 = ['idade'=> '37', 'nome' => 'Leo'];
			var_dump($arr1 == $arr4);
			var_dump($arr1 === $arr4); // Neste caso eh false pq o valor da idade eh do tipo String. Enquanto do arr1 o valor eh do tipo Int
		?>
	</div>
</main>
<?php
	include "../includes/footer.php";
?>

