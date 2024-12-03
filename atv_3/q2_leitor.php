<?php
// Abrir o arquivo teste.txt para adicionar conteúdo no final
$arquivo = fopen("teste.txt", "a");

if ($arquivo) {
    // Escrever a frase no final do arquivo
    fwrite($arquivo, "PHP é incrível!\n");
    
    // Fechar o arquivo
    fclose($arquivo);
    echo "Frase adicionada com sucesso!";
} else {
    // Caso o arquivo não possa ser aberto
    echo "Não foi possível abrir o arquivo.";
}
?>
