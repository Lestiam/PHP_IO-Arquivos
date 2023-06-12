<?php
//
//$arquivo = fopen('cursos-php.txt', 'a'); //w de write (escrita) em ingles; Ele tambem ja cria automaticamente meu arquivo txt no projeto. O modo w começa a escrever do inicio do arquivo, sobrescrevendo o que ja esta escrito, o modo "a", escreve do final do arquivo, adicionando novas frases
//
//
//$curso = "\n" . 'Design patterns: Breve introdução aos padrões de projeto';
//
//fwrite($arquivo, $curso); //parametros: o primeiro é onde eu quero escrever, o segundo é o que eu quero escrever. o terceiro parametro seria se eu quizesse limitar a quantidade de caracteres (digitar 10 por ex.)
//
//fclose($arquivo);

$curso = "\nDesign patterns: Breve introdução aos padrões de projeto";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND | FILE_TEXT); //coloca nesse arquivo o conteudo. O File_appende serve para informar que eu não quero sobrescrever o conteudo, e sim, adicionar algo a mais
//o terceiro parametro se chama flag, o | serve para somar as flags, ou seja, estou usando aqueals duas ao mesmo tempo