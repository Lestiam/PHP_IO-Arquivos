<?php

//estou usando o contexto aqui para passar a senha do meu arquivo zipado ao programa
$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents(
    'zip://arquivos.zip#lista-cursos.txt',
    false,
     $contexto
); //o 'zip://' é o wraper(protocolo) do php que vamos utilizar; dentro do arquivo zipado, vamos ler o arquivo lista-cursos

fopen('arquivos.zip', 'r', false, $contexto); //consigo usar contexto no fopen também