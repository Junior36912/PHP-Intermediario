<?php

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

echo json_encode($filme);

// Aqui, a string JSON é convertida para um objeto PHP. 
// A string contém informações sobre o filme, com uma codificação especial para o caractere "ó" (representado como \u00f3).
var_dump(json_decode('{"nome":"Thor: Ragnarok", "ano":2021, "nota":7.8, "genero":"super-her\u00f3i"}'));


// A função json_decode com o segundo parâmetro como 'true' converte a string JSON para um array associativo em vez de um objeto PHP.
// Com isso, os dados serão interpretados como um array associativo, permitindo o acesso usando chaves ao invés de propriedades de objeto.
var_dump(json_decode('{"nome":"Thor: Ragnarok", "ano":2021, "nota":7.8, "genero":"super-her\u00f3i"}', true));