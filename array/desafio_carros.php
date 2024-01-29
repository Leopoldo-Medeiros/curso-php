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
$tipo = $_GET['tipo'];
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];

// Eu preciso saber se os campos do form estão preenchidos
// Pra isso utilizei um if statement
if (empty($tipo)) {
    $tipo = null;
}
if (empty($marca)) {
    $marca = null;
}
if (empty($modelo)) {
    $modelo = null;
}

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