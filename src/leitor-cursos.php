<?php

////função para abrir um arquivo em PHP, lembra do ingles: FileOpen; Esta função me retorna um ponteiro para este arquivo
////parametros: nome do arquivo, modo 'r' = r de read (ler)
//$arquivo = fopen('lista-cursos.txt','r');
//
////esse while era para ler o arquio linha a linha
////while (!feof($arquivo)) { //se eu nao tiver chegado no fim do arquivo.... e depois de ler uma linha eu quero saltar para a linha seguinte. feof do ingles file end of file
////$curso = fgets($arquivo); //pega uma String até o fim da linha de determinado arquivo; Eu posso passar outro parametro lenght para ele ler determinada quantidade de caracteres
////
////    echo $curso; //exibo o valor da variavel curso
////}
//
//$tamadoDoArquivo = filesize('lista-cursos.txt'); //função para pergar o tamanho do arquivo
//$cursos = fread($arquivo, $tamadoDoArquivo); //função para ler o arquivo todo. Parametros: o arquivo e o tamanho (numero de bytes que queremos ler)
//
//echo $cursos;
//
//fclose($arquivo); //fecho o recurso, garanto que não estou gastando recursos e libero apra que outros programas possam utilizá-lo
//
////todo: o maximo de tamanho do arquivo que o PHP consegue ler é de 128mb. Use o fread para arquivo ate 128 mb e utilize o feof com o while para arquivos maiores que isso!!

//recebe varios parametrtos mas o unico obrigatorio é o nome do arquivo
$cursos = file_get_contents('lista-cursos.txt'); //esta função vai abrir o arquivo, buscar  todo o conteudo deste arquivo retornando para gente uma string e vai fechar o arquivo
//ou seja, esta função faz tudo que as outras fazem, mas em apenas uma linha
echo $cursos;

//existe também a função file: esta função poe cada linha do texto em um array e "cospe na tela" com o var_dump, pode usar as duas, dependendo da necessidade

$cursos2 = file('lista-cursos.txt');

var_dump($cursos2);

//resumo: file_get_contents devolve todo o conteúdo o arquivo como uma string. file devolve cada linha do arquivo como um item em um array
