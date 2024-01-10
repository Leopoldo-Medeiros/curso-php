<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    2 trabalhos -> Terça e Quinta
    - Se os 2 forem executados -> TV 50" + Sorvete
    - Se apenas 1 for executado -> TV 32" + Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável
-->

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
     </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.3rem;
    }
    button {
        background-color: #078bd2;
        border-radius: 12px;
        color: #f0f0f0;
    }
</style>

<?php

if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if($t1 && $t2) {
        $tv = '50"';
    }elseif($t1 xor $t2){
        $tv = '32"';
    }

    if($t1 || $t2) {
        $sorvete = true;
    }

    if($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV desta vez!";
    }

    $saudavel = !$sorvete;

    if(!$saudavel) {
        $resultado .= '<br>Estamos mais saudáveis!';
    } else {
        $resultado .='<br>Sorvete liberado!';
    }

    echo "<p>$resultado</p>";
}