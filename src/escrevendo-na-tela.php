<?php



fwrite(STDOUT, 'Olá Mundo!' . "\n"); //stdout para escrever na tela (console). TEM O stderr TBM, PARA ERRO

 $cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
 stream_copy_to_stream($cursos, STDOUT); //estou pegando o que ta escrito no arquivo dentro do zip e lançando direto na tela
