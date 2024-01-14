<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
    // Uma vez que eu altero o primeiro index para ser 1, todos os outros seguirao a sequencia
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];
