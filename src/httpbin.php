<?php
/*estamos vendo que é possível adicionar o que é chamado de contexto à manipulação dos streams.
Com isso conseguimos neste vídeo informar qual o verbo HTTP utilizado em uma requisição, informar cabeçalhos, o conteúdo, etc.
Qual a função utilizada para criar contextos?
stream_context_create
*/



//na documentação chama contents (table of contents)
$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo',
    ]
]);
echo file_get_contents('http://httpbin.eorg/post', false, $contexto); //cria e exibe o que foi recebido da resposta dessa requisição