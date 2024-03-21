<div class="titulo">Break/Continue</div>

<?php
$cont = 15;
for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont > 20) {
        break;
    }
}

echo "<hr>";

for(;;) {
    $cont++;
    // Aqui estaá imprimindo somente os números pares.
    // Sempre que ele chamar um número ímpar, ele vai chamar o continue e em seguida vai para a proxima repeticao.
    if($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
}

foreach(array(1,2,3,4,5) as $valor) {
    if($valor === 5) break;
    if($valor %2 === 0) continue;
    echo "$valor <br>";

    // Explicacao:
    // Aqui ele retorna os valores 1 e 3, que sao ímpares
    // Ele iria mostrar o valor 5, mas ele encontrou o break e consequentemente parou
}

echo "Fim!";