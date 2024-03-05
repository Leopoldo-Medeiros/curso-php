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
        // Verifica se os parâmetros GET estão presentes e se são válidos
        if (isset($_GET['tipo'], $_GET['marca'], $_GET['modelo'])) {
            $tipo = $_GET['tipo'];
            $marca = $_GET['marca'];
            $modelo = $_GET['modelo'];

            // Verifica se o tipo de carro está presente no array
            if (isset($carros[$tipo])) {
                // Verifica se a marca de carro está presente no array
                if (isset($carros[$tipo][$marca])) {
                    // Verifica se o modelo de carro está presente no array
                    if (in_array($modelo, $carros[$tipo][$marca])) {
                        // Se todos os parâmetros GET forem válidos, exibe o carro selecionado
                        echo '<p>Carro selecionado: ' . $modelo . ' da marca ' . $marca . ', tipo ' . $tipo . '</p>';
                    } else {
                        // Se o modelo não estiver no array, exibe uma mensagem de erro
                        echo '<p>Error message: "Modelo de carro inválido"</p>';
                    }
                } else {
                    // Se a marca não estiver no array, exibe uma mensagem de erro
                    echo '<p>Error message: "Marca de carro inválida"</p>';
                }
            } else {
                // Se o tipo não estiver no array, exibe uma mensagem de erro
                echo '<p>Error message: "Tipo de carro inválido"</p>';
            }
        } else {
            // Se algum parâmetro GET estiver ausente, exibe uma mensagem de erro
            echo '<p>Error message: "Parâmetros GET ausentes"</p>';
        }

        //        $carro = implode(' ', array($tipo, $marca, $modelo));

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
            <label>
                <select name="tipo">
                    <option value="">Selecione o tipo</option>
                    <?php echo $options_tipo; ?>
                </select>
            </label>
            <?php
            if ($tipo) {
                echo '<select name="tipo">';
                echo '<option value="">Selecione a tipo</option>';
                echo $options_tipo;
                echo '</select>';
            }
            if ($marca) {
                echo '<select name="marca">';
                echo '<option value="">Selecione o marca</option>';
                echo $options_marca;
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
