<?php
function carregarClasse($class)
{
       
    $classe = str_replace('\\', '/', $classe);
    if(file_exists("$classe.php")) {
        throw new Exception("Classe $classe nao encontrada");
        return;
    }
    
    require_once "$classe.php";
}

spl_autoload_register('carregarClasse');