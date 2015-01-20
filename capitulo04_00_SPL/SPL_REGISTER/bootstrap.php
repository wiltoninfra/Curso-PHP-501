<?php
function carregarClasse($class)
{
    $classe = str_replace('\\', '/', $classe);
    if(file_exists("$classe.php")) {
        throw new Exception('Classe nao encontrada');
        return;
    }
    
    require_once '$classe.php';
}

slp_autoload_register('carregarClasse');