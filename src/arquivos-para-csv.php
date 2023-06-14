<?php
//Vimos no último vídeo que é fácil escrever um conteúdo em um arquivo utilizando o formato CSV, através da função fputcsv.
// Além do arquivo aberto, que parâmetro preciso passar para esta função?
//Resp.: Um array onde cada item será uma "coluna" no arquivo
//Alternativa correta! O array [1, 2], por exemplo seria escrito como 1, 2 no arquivo.


$meusCursos = file('lista-cursos.txt'); //pego meus cursos no formato de array
$outrosCursos = file('cursos-php.txt'); //pego meus cursos no formato de array

$arquivosCsv = fopen('cursos.csv', 'w'); // crio esse terceiro arquivo e escrevo nele. Csv significa comma separate value, ou seja, valores separados por virgula: Coluna1,Coluna2,etc

foreach ($meusCursos as $curso) {
    $linha = [trim($curso), 'Sim'];

    //fwrite($arquivosCsv, implode(',', $linha)); funcionaria assim, mas é a forma "deselegante", o php tem uma função para escrever direto no formato Csv:

    fputcsv($arquivosCsv, $linha, ';'); //o excel le arquivos separados por ;
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), 'Não'];

    fputcsv($arquivosCsv, $linha, ';'); //o excel le arquivos separados por ;

}

fclose($arquivosCsv);