<?php

echo "Bem-Vindo ao Screen Match";
echo "\n";
 
function incluidoNoPlano($planoPrime, $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020;
}

$nomeFilme = "Wicked";

$anoLancamento = 2024;

$quantidadeDeNotas = $argc - 1;

$notas = [];

for ($contador = 1 ; $contador < $argc ; $contador++){
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

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


$filme = [
    'nome' => "Barbie",
    'ano' => 2020,
    'nota' => 10,
    'genero' => 'Ficção',
];


function exibeMensagemLancamento(int $ano) {
    if ($ano > 2022) {
            echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
            echo "Esse filme ainda é novo\n";
    } else {
            echo "Esse filme não é um lançamento\n";
    }

}

exibeMensagemLancamento($filme['ano']);



// código omitido

// código omitido