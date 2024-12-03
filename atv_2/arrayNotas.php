<?php

// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$quantidadeDeNotas = $argc - 1;

$notas = [];

for ($contador = 1 ; $contador < $argc ; $contador++){
    $notas[] = (float) $argv[$contador];
}
rsort($notas);
$notasOrdenadas = $notas;

$tresMaiores = array_slice($notasOrdenadas, 0, 3);

foreach($tresMaiores as $nota){
    echo $nota;
}

echo "\n";
echo "Notas:";
var_dump($notas);

echo "\n";
echo "Notas Ordenadas:";
var_dump($notasOrdenadas);

echo "\n";
echo "3 Maiores Notas:";
var_dump($tresMaiores)


?>