<?php
include "../includes/header.php";
?>
<main class="principal">
    <div class="conteudo">
        <div class="titulo">Recursividade</div>
        <hr>

<?php

function somaUmAte($numero) {
    $soma = 0;
    for($i = 1; $i<= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';

// Explicação do resultado dessa funçao retornar o valor de 55

/**
 * A função `somaUmAte` calcula a soma de todas as inteiros de 1 até e incluindo o número de entrada $numero.
 * No exemplo onde $numero é 10, a função calcula a soma dos inteiros de 1 a 10, que são:
 * 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10
 * A soma desses inteiros é 55.
 * TPara entender o porquê, você pode somá-los manualmente ou usar uma fórmula matemática para calcular a soma de uma série aritmética. A fórmula para a soma de uma série aritmética é:
 * sum = (n * (n + 1)) / 2
 * onde n é o número de termos da série.
 * Neste caso, n é 10, então a soma é
 * sum = (10 * (10 + 1)) / 2
 * sum = (10 * 11) / 2
 * sum = 110 / 2
 * sum = 55
 * Portanto, a função somaUmAte retorna corretamente a soma dos inteiros de 1 a 10, que é 55.
 * */

 function somaRecursividadeUmAte($numero) {
     // Se o número passado for igual a 1
     // Ou seja, a soma de 1 até é igual a 1
     // Condição de parada
     if($numero === 1) {
         return 1;
     } else {
         return $numero + somaRecursividadeUmAte($numero - 1);
     }
 }

 echo somaRecursividadeUmAte(150) . '<br>';

 /*
  * A função é chamada com o argumento 150, então a função vai somar os inteiros de 1 até 150 recursivamente
  * e retornar o resultado final.
  *
  * Por exemplo, a chamada somaRecursividadeUmAte(150) vai retornar a soma dos inteiros de 1 até 150, que é 11325.
  * **/
 function somaRecursivaEconomica($numero) {
     return $numero === 1 ? 1 :
         $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursividadeUmAte(150) . '<br>';