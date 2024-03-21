<?php
	include "../includes/header.php";
?>
	<main class="principal">
		<div class="conteudo">
			<div class="titulo">Operações</div>
            <hr>

			<?php
			$dados1 = [
			    "nome" => "Leo",
			    "idade" => 37
			];

			$dados2 = [
			    "naturalidade" => "São Paulo"
			];

			$dados2["endereço"] = "Rua Dublin 15";

			$dadosCompletos = $dados1 + $dados2;
			print_r ($dadosCompletos);

			echo '<br>' . is_array($dadosCompletos);
			echo '<br>' . count($dadosCompletos);

			echo '<br>';
			$indice = array_rand($dadosCompletos);
			echo "$indice = $dadosCompletos[indice]";
			echo '<br>';
			echo "{$dadosCompletos['idade']}";
			echo " ${dadosCompletos['idade']}";

			unset($dadosCompletos["nome"]);
			echo '<br>';
			var_dump($dadosCompletos);

			$impares = [1, 3, 5, 7, 9];
			$pares = [2, 4, 6, 8];

			$decimais = $pares + $impares;
			echo '<br>';
			print_r($decimais);

			$decimais = array_merge($pares, $impares);
			echo '<br>';
			print_r($decimais);

			sort($decimais);
			echo '<br>';
			print_r($decimais);
			?>

	</div>
</main>
<?php
	include "../includes/footer.php";
?>
