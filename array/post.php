<<<<<<< HEAD
<?php
	include "../includes/header.php";
?>
	<main class="principal">
		<div class="conteudo">
			<div class="titulo">$_POST</div>

			<form action="#" class="post">
				<input type="text" name="nome">
				<input type="text" name="sobrenome">
				<select name="estado">
					<option value="RJ">Rio de Janeiro</option>
					<option value="SP">São Paulo</option>
				</select>
				<button>Enviar</button>
			</form>

			<style>
				form > * {
					font-size: 1.8rem;
				}
				button {
					background-color: #61b777;
				}
			</style>

			<?php

			print_r($_GET);
			echo '<br>';
			print_r($_POST);
			echo '<br>' . count($_POST);
			?>

	</div>
</main>
<?php
	include "../includes/footer.php";
?>
=======
<div class="titulo">$_POST</div>

<form action="#" class="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="RJ">Rio de Janeiro</option>
        <option value="SP">São Paulo</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
    button {
        background-color: #61b777;
    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>' . count($_POST);
>>>>>>> c4e8900 (Initial commit)
