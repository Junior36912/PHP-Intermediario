<?php

//Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function fazOperacao(int $n1, int $n2, string $operacao){
    if ($operacao == "+"){
        $soma = $n1 + $n2;
        echo "$n1 + $n2 = $soma";
    } elseif ($operacao == "-"){
        $sub = $n1 - $n2;
        echo "$n1 - $n2 = $sub";
    } elseif ($operacao == "*"){
        $mult = $n1 * $n2;
        echo "$n1 * $n2 = $mult";
    } elseif ($operacao == "/"){
        $divis = $n1 / $n2;
        echo "$n1 / $n2 = $divis";
    }
}

$numero1 = $argv[1];
$numero2 = $argv[2];
$operador = $argv[3];


fazOperacao($numero1, $numero2, $operador);