<?php

//função para abrir um arquivo em PHP, lembra do ingles: FileOpen; Esta função me retorna um ponteiro para este arquivo
//parametros: nome do arquivo, modo 'r' = r de read (ler)
$arquivo = fopen('lista-cursos.txt','r');

//esse while era para ler o arquio linha a linha
//while (!feof($arquivo)) { //se eu nao tiver chegado no fim do arquivo.... e depois de ler uma linha eu quero saltar para a linha seguinte. feof do ingles file end of file
//$curso = fgets($arquivo); //pega uma String até o fim da linha de determinado arquivo; Eu posso passar outro parametro lenght para ele ler determinada quantidade de caracteres
//
//    echo $curso; //exibo o valor da variavel curso
//}

$tamadoDoArquivo = filesize('lista-cursos.txt'); //função para pergar o tamanho do arquivo
$cursos = fread($arquivo, $tamadoDoArquivo); //função para ler o arquivo todo. Parametros: o arquivo e o tamanho (numero de bytes que queremos ler)

echo $cursos;

fclose($arquivo); //fecho o recurso, garanto que não estou gastando recursos e libero apra que outros programas possam utilizá-lo

//o maximo de tamanho dr arquivo que o PHP consegue ler é de 128mb. Use o fread para arquivo ate 128 mb e utilize o feof com o while para arquivos maiores que isso!!