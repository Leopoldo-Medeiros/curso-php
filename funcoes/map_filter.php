<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Map & Filter</div>
        <hr>

<?php
// Criando uma funcao que precisa arredondar as notas e que vai gerar um array final
$notas = [5.7, 8.6, 9.8, 7.3];
$notasFinais1 = [];

// Percorrend cada um dos elementos
    foreach ($notas as $nota) {
        // Fazendo o arredondamento das notas
        $notasFinais1[] = round($nota);
    }

    print_r($notasFinais1);

echo '<br>';
$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

$apenasAprovados1 = [];

foreach ($notas as $nota) {
    if($nota >= 7) {
        $apenasAprovados1[] = $nota;
    }
}
echo '<br>';
print_r($apenasAprovados1);

function aprovados($nota) {
    // As notas maiores ou iguais a 7 retornarao verdadeiro e o elemento passará a contar no array final
    // Caso contrario, esse elemento nao contara no array final
    return $nota >= 7;
}
echo '<br>';
$apenasAprovados2 = array_filter($notas, 'aprovados');
print_r($apenasAprovados2);

// Arredondandp nota e acrescentando mais 1 ponto
function calculoPositivo($nota) {
    $notaFinal = round($nota) + 1;
    // Porem essa nota pode ser 11, ultrapassando o range permitido (10)
     return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais3 = array_map('calculoPositivo', $notas);
print_r($notasFinais3);