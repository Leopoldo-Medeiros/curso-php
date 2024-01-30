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

echo '<select name="tipo">';
echo $options_tipo;
echo '<select>';

echo '<select name="marca">';
echo $options_marca;
echo '</select>';

echo '<select name="modelo">';
echo $options_modelo;
echo '</select>';

// Create the submit button
echo '<input type="submit" value="Enviar">';

// Close the form
echo '</form>';

?>