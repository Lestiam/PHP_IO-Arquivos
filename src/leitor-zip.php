<?php

echo file_get_contents('zip://arquivos.zip#lista-cursos.txt'); //o 'zip://' é o wraper(protocolo) do php que vamos utilizar; dentro do arquivo zipado, vamos ler o arquivo lista-cursos