<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Arrays Constantes</div>
        <hr>

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

        // Nesta parte está recebendo os valores dos campos do formulário
        // Aqui utilizei Operador ternário
        // Se as variaveis estiverem presentes, atribui seus valores às variáveis correspondentes; caso contrário, atribui null.
        $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : null;
        $marca = isset($_GET['marca']) ? $_GET['marca'] : null;
        $modelo = isset($_GET['modelo']) ? $_GET['modelo'] : null;

        // Verificando se o tipo, marca e modelo selecionados estão dentro do array
        if ($tipo && $marca && $modelo) {
            if (!isset($carros[$tipo]) || !isset($carros[$tipo][$marca]) || !in_array($modelo, $carros[$tipo][$marca])) {
                // Se algum dos valores não estiver no array, exibir mensagem de erro e impedir a continuação do script
                echo '<p>Error message: "Opção inválida"</p>';
                exit;
            }
        }

        ?>
        <form action="desafio_carros.php" class="post" method="GET">
            <label>
                <select name="tipo">
                    <option value="">Selecione o tipo</option>
                    <?php
                    // Gerando as opções para o tipo de carro
                    foreach ($carros as $tipo_key => $tipo_value) {
                        $selected = ($tipo == $tipo_key) ? "selected" : "";
                        echo '<option value="' . $tipo_key . '" ' . $selected . '>' . $tipo_key . '</option>';
                    }
                    ?>
                </select>
            </label>
            <?php if ($tipo): ?>
                <label>
                    <select name="marca">
                        <option value="">Selecione a marca</option>
                        <?php
                        // Gerando as opções para a marca do carro
                        // Percorrendo o array
                        foreach ($carros[$tipo] as $marca_key => $marca_value) {
                            $selecionado = ($marca == $marca_key) ? "selecionado" : "";
                            echo '<option value="' . $marca_key . '" ' . $selecionado . '>' . $marca_key . '</option>';
                        }
                        ?>
                    </select>
                </label>
            <?php endif; ?>

            <?php if ($marca): ?>
                <label>
                    <select name="modelo">
                        <option value="">Selecione o modelo</option>
                        <?php
                        // Gerando as opções para o modelo do carro
                        // Percorrendo o array
                        foreach ($carros[$tipo][$marca] as $modelo_value) {
                            $selecionado = ($modelo == $modelo_value) ? "selecionado" : "";
                            echo '<option value="' . $modelo_value . '" ' . $selecionado . '>' . $modelo_value . '</option>';
                        }
                        ?>
                    </select>
                </label>
            <?php endif; ?>

            <?php if (!empty($tipo) && !empty($marca) && !empty($modelo)): ?>
                <p>Carro selecionado <b><?php echo $modelo; ?></b></p>
                <p><a href="desafio_carros.php">Reset</a></p>
            <?php else: ?>
                <button>Carregar</button>
            <?php endif; ?>
        </form>
</main>

<?php
include "../includes/footer.php";
?>

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
    $options_tipo .= '<option value="' . $tipo_key . '">' . $tipo_key . '</option>';
}

// Campo Marca
$options_marca = '';
if ($tipo) {
    $marcas = $carros[$tipo];
    foreach ($marcas as $marca_key => $marca_value) {
        $options_marca .= '<option value="' . $marca_key . '">' . $marca_key . '</option>';
    }
}

// Campo modelo
$options_modelo = '';
if ($tipo && $marca) {
    $modelos = $carros[$tipo][$marca];
    foreach ($modelos as $modelo_key => $modelo_value) {
        $options_modelo .= '<option value="' . $modelo_key . '">' . $modelo_value . '</option>';
    }
}
?>

