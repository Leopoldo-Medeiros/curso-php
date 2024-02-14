<?php
    include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">Arrays Constantes</div>
                <?php

                $carros = array(
                    'sedans' => array(
                        'Toyota' => array('Camry', 'Corolla', 'Avalon'),
                        'Honda' => array('Accord', 'Civic', 'Fit'),
                        'Ford' => array('Fusion', 'Focus', 'Taurus')
                    ),
                    'SUV' => array(
                        'Chevrolet' => array('Equinox', 'Traverse', 'Suburban'),
                        'Ford' => array('Escape', 'Explorer', 'Expedition'),
                        'Honda' => array('CR-V', 'Pilot', 'HR-V')
                    ),
                    'esportivos' => array(
                        'Ferrari' => array('488 GTB', '812 Superfast', 'Portofino'),
                        'Porsche' => array('911', 'Cayman', 'Panamera'),
                        'Lamborghini' => array('Huracan', 'Aventador', 'Urus')
                    )
                );

                // Nesta parte estou declarando as variáveis apra receberem os valores dos campos no Form
                $tipo = null;
                $marca = null;
                $modelo = null;

                // Eu preciso saber se os campos do form estão preenchidos
                // Pra isso utilizei um if statement
                if (isset($_GET['tipo'])) {
                    $tipo = $_GET['tipo'];
                }
                if (isset($_GET['marca'])) {
                    $marca = $_GET['marca'];
                }
                if (isset($_GET['modelo'])) {
                    $modelo = $_GET['modelo'];
                }

                $carro = implode(' ', array($tipo, $marca, $modelo));

                // Implementei um foreach para gerar as opções para o campo tipo, marca e modelo
                $options_tipo = '';
                foreach ($carros as $tipo_key => $tipo_value) {
									if ($tipo == $tipo_key) {
										$options_tipo .= '<option value="' . $tipo_key . '" selected>' . $tipo_key . '</option>';
                  } else {
										$options_tipo .= '<option value="' . $tipo_key . '">' . $tipo_key . '</option>';
									}
                }

                // Campo Marca
                $options_marca = '';
                if ($tipo) {
                    $marcas = $carros[$tipo];
                    foreach ($marcas as $marca_key => $marca_value) {
											if ($marca == $marca_key) {
												$options_marca .= '<option value="' . $marca_key . '" selected>' . $marca_key . '</option>';
                      } else {
												$options_marca .= '<option value="' . $marca_key . '">' . $marca_key . '</option>';
											}
                    }
                }

                // Campo modelo
                $options_modelo = '';
                if ($tipo && $marca) {
                    $modelos = $carros[$tipo][$marca];
                    foreach ($modelos as $modelo_value) {
											if ($modelo == $modelo_value) {
												$options_modelo .= '<option value="' . $modelo_value . '" selected>' . $modelo_value . '</option>';
											} else {
												$options_modelo .= '<option value="' . $modelo_value . '">' . $modelo_value . '</option>';
                      }
                    }
                }
                ?>

				        <form action="desafio_carros.php" class="post">
					        <select name="tipo">
						        <option value="">Selecione o tipo</option>
						        <?php echo $options_tipo; ?>
					        </select>
						        <?php
						        if ($tipo) {
							        echo '<select name="marca">';
							        echo '<option value="">Selecione a marca</option>';
							        echo $options_marca;
							        echo '</select>';
						        }
										if ($marca) {
											echo '<select name="modelo">';
											echo '<option value="">Selecione o modelo</option>';
											echo $options_modelo;
											echo '</select>';
                    }
										if (!empty($tipo) && !empty($marca) && !empty($modelo)) {
											echo '<p>Carro selecionado <b>' . $modelo . '</b></p>';
											echo '<p><a href="desafio_carros.php">Reset</a></p>';
                    } else {
											echo '<button>Carregar</button>';
                    }
						        ?>
				        </form>

        </div>
    </main>
<?php
include "../includes/footer.php";
?>
