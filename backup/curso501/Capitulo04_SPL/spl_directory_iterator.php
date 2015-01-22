<?php

$diretorio = new DirectoryIterator('/var/www/curso501/Capitulo01_OO');

while($diretorio->valid()){
    echo "Arquivo: " . $diretorio->getFileName() . "<br>";
    $diretorio->next();
}