<?php

$temperaturaEmCelsius = $argv[1] ?? 0;

function CelciusEmFahreinheit(float $tempC){
    $temperaturaEmFahrenheit = $tempC * 1.8 + 32;
    return $temperaturaEmFahrenheit;
}


$mensagem = "A temperatura de " . $temperaturaEmCelsius . "°Celsius é em Fahreinheit " . CelciusEmFahreinheit($temperaturaEmCelsius) . "°F";

echo $mensagem;