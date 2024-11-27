<?php
function calcularIMC($peso, $altura) {
    if ($altura <= 0) {
        return "Altura inválida!";
    }
    $imc = $peso / ($altura * $altura);
    return round($imc, 2); // Arredonda para duas casas decimais
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        return "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        return "Obesidade grau 2";
    } else {
        return "Obesidade grau 3";
    }
}

$alturaUser = $argv[1];
$pesoUser = $argv[2];

$imc = calcularIMC($pesoUser, $alturaUser);

echo classificarIMC($imc);
?>
