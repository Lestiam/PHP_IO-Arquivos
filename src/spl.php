<?php
//esses métodos vem da classe SplFileObject, ele traz varias informações do objeto
$arquivoCursos = new SplFileObject('cursos.csv'); //um objeto de arquivo

while (!$arquivoCursos->eof()) { //enquanto eu nao chegar ao fim do arquivo (end of file)...
    $linha  = $arquivoCursos->fgetcsv(';'); //eu leio uma linha em csv

    echo $linha[0] . PHP_EOL; //aqui eu imprimo só a primeira coluna
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime()); //o getCTime pega um time stamp de quando meu arquivo cursos.csv foi criado

echo $date->format('d/m/Y - H:i:s'); //aqui eu converto o formato do timeStamp para d/m/y