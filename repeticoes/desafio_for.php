<div class="titulo">Desafio For</div>

<!--
Usar o for ...
#
##
###
####
#####
1. Pode usar incremento $i++
2. Não pode usar incremento $i++
-->

<?php
$impressao = '';
for($count = 1; $count <= 5; $count++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for(
        $impressao2 = '#';
        $impressao2 !== '######';
        $impressao2 .= '#') {
        echo "$impressao2 <br>";
}