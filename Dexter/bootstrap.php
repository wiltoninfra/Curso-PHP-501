<?php 

require 'config/config.php';

define('PATH', 'public/');



function carregarClasse($classe)
{
    $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
    
    foreach (array('class.php', 'trait.php') as $extensao) {     
    
    
    
    if(file_exists("src/$classe.$extensao")) {
        require_once "src/$classe.$extensao";
        return true;
    }
        
    }
    throw new Exception("Classe $classe nao encontrada");
   
    
}


spl_autoload_register('carregarClasse');