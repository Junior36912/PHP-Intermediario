<?php
// A string JSON
$json = '{"nome":"José Jackson Lima de SOuza","anoNasc":2005,"profissao":"Dev"}';

// Converter a string JSON em um objeto PHP
$objeto = json_decode($json);

// Exibir o objeto resultante
echo "Nome: " . $objeto->nome . "\n";
echo "Ano de Nascimento: " . $objeto->anoNasc . "\n";
echo "Profissão: " . $objeto->profissao . "\n";
?>
