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


function exibeMensagemLancamento(int $ano) {
    if ($ano > 2022) {
            echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
            echo "Esse filme ainda é novo\n";
    } else {
            echo "Esse filme não é um lançamento\n";
    }

};

// Define um array associativo chamado $filme com informações sobre um filme
$filme = [
    'nome' => "Barbie",  // Nome do filme
    'ano' => 2020,       // Ano de lançamento
    'nota' => 10,        // Nota do filme
    'genero' => 'Ficção' // Gênero do filme
];

// Chama a função exibeMensagemLancamento passando o ano do filme como argumento
exibeMensagemLancamento($filme['ano']);

// Exibe o nome do filme com detalhes usando var_dump
var_dump($filme['nome']);

// Exemplo omitido de outros códigos
# código omitido

// Exibe uma variável chamada $notas (não foi declarada no exemplo)
var_dump($notas);

// Ordena os elementos de $notas em ordem crescente
sort($notas);

// Exibe o array $notas já ordenado
var_dump($notas);

// Obtém a menor nota do array $notas e a exibe
$menorNota = min($notas);
var_dump($menorNota);

// Exibe o nome do filme novamente
var_dump($filme['nome']);

// Código omitido
# código omitido

// Exibe o nome do filme
var_dump($filme['nome']);

// Verifica se o caractere ':' existe no nome do filme e exibe sua posição
var_dump(strpos($filme['nome'], ':'));

// Código omitido
# código omitido

// Exibe o nome do filme
var_dump($filme['nome']);

// Armazena a posição do caractere ':' no nome do filme (se existir) em uma variável
$posicaoDoisPontos = strpos($filme['nome'], ':');

// Exibe a posição encontrada (ou false, se não existir)
var_dump($posicaoDoisPontos);

// Código omitido
# código omitido

// Obtém uma substring do nome do filme que vai do início até a posição do caractere ':'
// Caso o caractere ':' não exista, o resultado será false
var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));



//comentarios feitos atraves do chatGPT

?>

