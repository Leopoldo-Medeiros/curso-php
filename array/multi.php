<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Leopoldo",
        "idade" => 37,
        "naturalidade" => "Hell de Janeiro a Dezembro"
    ],
    [
        "nome" => "Luciana",
        "idade" => 42,
        "naturalidade" => "São Paulo"
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Pedro",
    "idade" => 4,
    "naturalidade" => "Dublin, Irlanda"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade']
;
$dados[2]["vizinho"] = "Elon Musk";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);


