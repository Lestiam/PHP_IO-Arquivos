<?php

class MeuFiltro extends php_user_filter //classe que devemos extender para gerarmos nosso proprio filtro
{
    public $stream;

    public function onCreate()
    {
        $this->stream = fopen('php://temp', 'w+'); //esse temp simplesmente me fornece um espaço temporário, um espaço em que eu possa ler, escrever e depois isso vai ser ignorado; w+ = leitura e escrita
        return $this->stream !== false; //retorno só se ele for igual a false, pq se for, ele deu erro
    }

    public function filter($in, $out, &$consumed, $closing) //in = conteudo de entrada
    {
        $saida = ''; //conteudo que estou mandando passar
        while ($bucket = stream_bucket_make_writeable($in)) {//enquanto tiver conteudo de entrada, vai executando esse código
            $linhas = explode("\n", $bucket->data); //bucket->data = propriedade do bucket. é a string que estamos recebendo, no caso, é a linha a linha do que esta escrito no arquivo. Vou explodi-lo separando de linha a linha

            foreach ($linhas as $linha) { //para cada uma dessas linhas, eu quero verificar se existe a palavra "parte"
                if (stripos($linha, 'parte' !== false)) {//stripos = função do php que tenta encontrar uma string dentro da outra. Se não encontrar, retorna false, se encontrar, retorna a posiçãod a string. 1º param é onde eu quero encontrar, 2º é o que eu quero encontrar. O 'i' de stripos faz com que ele ignora se a palavra esta com letra maiuscula ou minuscula
                    $saida .= "$linha\n"; //adiciono o conteudo da linha mais uma quebra de linha
                }
            }
        }


        $bucketSaida = stream_bucket_new($this->stream, $saida); //estou criando um bucket de saida, utilizando este stream ($this->stream) para cuidar dos dados, com o conteudo na variavel $saida e a variavel $saida (na linha 20) só tem o conteudo ods dados com a palavra "parte"
        stream_bucket_append($out, $bucketSaida); //estou adicionando o recurso de saída ($out), ou seja, o resultado do meu filtro, o recurso que tem os dados da saída ($bucketSaida)

        return PSFS_PASS_ON; //retorna que ocorreu tudo bem e o filtro pode continuar executando
    }
}