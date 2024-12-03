<?php

require __DIR__ . "/funcoes.php";


echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$filme = [
    'nome' => "Barbie",  // Nome do filme
    'ano' => 2020,       // Ano de lançamento
    'nota' => 10,        // Nota do filme
    'genero' => 'Ficção' // Gênero do filme
];

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

exibeMensagemLancamento($filme['ano']);

$filme = criaFilme("Thor: Ragnarok", 2021, 7.8, "super-herói");