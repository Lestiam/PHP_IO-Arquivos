<?php

require 'MeuFiltro.php';

$arquivoCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes',MeuFiltro::class); //registra um filtro de stream. O primeiro parametro é o nome que vou dar ao filtro e o segundo, da classe que ele vem

//stream_filter_append($arquivoCursos, 'string.toupper'); //adiciona um filtro a uma straem, neste caso, deixa tudo em maiusculo; Podemos utilizar mais de um filtro

stream_filter_append($arquivoCursos, 'alura.partes'); //adiciona um filtro a uma straem, neste caso, deixa tudo em maiusculo; Podemos utilizar mais de um filtro

//o comando var_dump(stream_get_filters()) nos retorna todos os filtros que esta função possui

var_dump(stream_get_filters());

echo fread($arquivoCursos, filesize('lista-cursos.txt'));