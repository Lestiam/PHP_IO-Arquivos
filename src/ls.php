<?php

$diretorioAtual = dir('.'); //referencia para o diretorio atual, que vem da classe Directory. o '.' representa o caminho do diretorio em qualquer sistema operacional

echo $diretorioAtual->path . PHP_EOL;

while ($arquivo = $diretorioAtual->read()) { //enquanto eu consigo pegar um arquivo no meu diretorio atual...
    echo $arquivo . PHP_EOL;
}