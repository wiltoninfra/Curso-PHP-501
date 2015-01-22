<?php

function carregarClasse($classe)
{
    $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
    if(!file_exists("$classe.php")){
        throw new Exception("Classe $classe nao encontrada");
        return;
    }
    
    require_once "$classe.php";

}

spl_autoload_register('carregarClasse');