<?php
include "../includes/header.php";
?>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo">While/Do While</div>
            <hr>
<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}