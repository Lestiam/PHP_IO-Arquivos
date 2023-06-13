<?php

//$teclado = fopen('php://stdin', 'r'); //significa stantad input(teclado), no modo de leitura

$novoCurso = trim(fgets(STDIN)); // pega as linhas digitadas. O trim serve para ele não adicionar uma linha a mais no final (quebra de linha)

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND); //adiciono ao meu arquivo cursos-php o que foi digitado em $novoCurso passando a flag FILE_APPEND para nao apagar o que ja tem la
