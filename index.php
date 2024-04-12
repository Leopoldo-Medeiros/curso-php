<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include(__DIR__ . "/includes/header.php");

$arquivos_funcoes = [
    'Função & Escopo' => 'escopo.php',
    'Argumentos e Retorno' => 'args_retorno.php',
    'Desafio Palindromo' => 'palindromo.php',
    'Argumentos Variáveis' => 'args_variaveis.php',
    'Argumento Padrão' => 'arg_padrao.php',
    'Usando Tipos' => 'usando_tipos.php',
    'Funções Anonimas' => 'anonimas.php',
    'Closure & Callable' => 'closure_callable.php',
];

$arquivos_repeticoes_main = [
    'Laço For' => 'for.php',
    'Desafio For' => 'desafio_for.php',
    'Foreach' => 'foreach.php',
    'Break/Continue' => 'break_continue.php',
    'Desafio Impressão' => 'desafio_impressao.php',
    'While/ Do While' => 'while.php',
    'Desafio Tabela #01' => 'desafio_tabela.php',
    'Desafio Tabela #02' => 'desafio_tabela2.php'
];

$arquivos_array = [
    'Array' => 'basico.php',
    'Mapa' => 'mapa.php',
    'Desafio Index' => 'desafio_index.php',
    'Desafio Meses' => 'desafio_meses.php',
    'Operações' => 'operacoes.php',
    'Desafio Sorteio' => 'desafio_sorteio.php',
    'Desafio Carros' => 'desafio_carros.php',
    'Multidimensionais' => 'multi.php',
    'Arrays Constantes' => 'constantes.php',
    '$_GET' => 'get.php',
    '$_POST' => 'post.php',
    'Comparação Arrays' => 'comparacao.php'
];

$arquivos_controle = [
    'If Else' => 'if_else.php',
    'Operadores Relacionais' => 'operadores_relacionais.php',
    'Desafio PI' => 'desafio_pi.php',
    'Operadores Lógicos' => 'operadores_logicos.php',
    'Desafio Op. Lógicos' => 'desafio_operadores_logicos.php',
    'Operador Ternário' => 'operador_ternario.php',
    'Switch' => 'switch.php',
    'Desafio Switch' => 'desafio_switch.php'
];

$arquivos_variaveis = [
    'Variáveis' => 'basico.php',
    'Desafio Equação' => 'desafio_equacao.php',
    'Atribuições' => 'atribuicoes.php',
    'Interpolação' => 'interpolacao.php',
    'Variáveis Variáveis' => 'variaveis_variaveis.php',
    'Desafio Variáveis' => 'desafio_variaveis.php',
    'Valor vs Referência' => 'valor_referencia.php',
    'Constantes' => 'constantes.php'
];

$arquivos_tipos = [
    'Tipo Inteiro' => 'int.php',
    'Tipo Float' => 'float.php',
    'Op. Aritméticas' => 'aritmeticas.php',
    'Desafio Precedência' => 'desafio_precedendia.php',
    'Tipo String' => 'string.php',
    'Desafio String' => 'desafio_string.php',
    'Tipo Booleano' => 'booleano.php',
    'Conversões' => 'conversoes.php'
];

$arquivos_basico = [
    'Olá PHP' => 'ola.php',
    'Integração HTML' => 'html.php',
    'Integração CSS' => 'css.php',
    'Comentários PHP' => 'comentarios.php',
    'Desafio' => 'desafio.php'
];
?>
<main class="principal">
    <div class="conteudo">
        <nav class="modulos">
	        <div class="modulo verde">
		        <h3>1. Básico</h3>
		        <ul>
                <?php
                foreach ($arquivos_basico as $nome => $arquivo) {
                    echo "<li><a href='basico/{$arquivo}'>{$nome}</a></li>";
                }
                ?>
		        </ul>
	        </div>
	        <div class="modulo vermelho">
		        <h3>2. Tipos</h3>
		        <ul>
                <?php
                foreach ($arquivos_tipos as $nome => $arquivo) {
                    echo "<li><a href='tipos/{$arquivo}'>{$nome}</a></li>";
                }
                ?>
		        </ul>
	        </div>
	        <div class="modulo azul">
		        <h3>3. Variáveis</h3>
		        <ul>
                <?php
                foreach ($arquivos_variaveis as $nome => $arquivo) {
                    echo "<li><a href='variaveis/{$arquivo}'>{$nome}</a></li>";
                }
                ?>
		        </ul>
	        </div>
	        <div class="modulo roxo">
		        <h3>4. Controle</h3>
		        <ul>
                <?php
                foreach ($arquivos_controle as $nome => $arquivo) {
                    echo "<li><a href='controle/{$arquivo}'>{$nome}</a></li>";
                }
                ?>
		        </ul>
	        </div>
          <div class="modulo laranja">
              <h3>5. Array</h3>
              <ul>
	                <?php
	                foreach ($arquivos_array as $nome => $arquivo) {
		                echo "<li><a href='array/{$arquivo}'>{$nome}</a></li>";
	                }
	                ?>
              </ul>
          </div>
            <div class="modulo verde-escuro">
                <h3>6. Repetições</h3>
                <ul>
                    <?php
                    foreach ($arquivos_repeticoes_main as $nome => $arquivo) {
                        echo "<li><a href='repeticoes_main/{$arquivo}'>{$nome}</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="modulo vermelho-escuro">
                <h3>7. Funções</h3>
                <ul>
                    <?php
                    foreach ($arquivos_funcoes as $nome => $arquivo) {
                        echo "<li><a href='funcoes/{$arquivo}'>{$nome}</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</main>
