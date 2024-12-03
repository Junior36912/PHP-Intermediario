<?php

$caminhoArquivo = __DIR__ . '/q1_json.json';

$conteudoArquivo = file_get_contents($caminhoArquivo);

$arquivo = json_decode($conteudoArquivoFilme, true);

var_dump($arquivo);