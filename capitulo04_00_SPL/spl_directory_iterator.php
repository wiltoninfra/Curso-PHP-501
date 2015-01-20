<?php

$diretorio = new DirectoryIterator('/var/www/capitulo01_OO');
while ($diretorio->valid()) {
    echo "Arquivo: " . $diretorio->getFileName();
    echo '<br>';
    echo "Arquivo: " . $diretorio->getPerms();
    echo '<br>';
    echo "Arquivo: " . $diretorio->getCTime();
    echo '<br>';
    $diretorio->next();
}