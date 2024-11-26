<?php

echo "Bem-Vindo ao Screen Match";
echo "\n";

$nomeFilme = "Wicked";

$anoLancamento = 2024;

$quantidadeDeNotas = $argc - 1;

$notas = [];

for ($contador = 1 ; $contador < $argc ; $contador++){
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluindoNoPlano = $planoPrime || $anoLancamento;

echo "Nome do Filme: " . $nomeFilme;
echo "\n";

echo "Nota do Filme: " . $notaFilme;
echo "\n";

echo "Ano de lançamento: " . $anoLancamento;
echo "\n";

if ($anoLancamento > 2024) {
    echo "Esse filme é um lançamento";
    echo "\n";
} elseif ($anoLancamento > 2022 && $anoLancamento <= 2024){ 
    echo "Esse filme ainda é novo!";
    echo "\n";
} else {
    echo "Esse filme não é um lançamento!";
    echo "\n";
}

$genero = match ($nomeFilme) {
    "Wicked" => "Fantasia",
    "Barbie" => "Comedia",
    "Deadpool" => "Aventura",
};

echo "O gênero do filme é: " . $genero;
echo "\n";