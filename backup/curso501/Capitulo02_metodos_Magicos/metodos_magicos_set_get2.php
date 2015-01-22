<?php

class Clientes
{

      protected $nome;
      protected $email;

    
    // brigatoriamente recebe 2 parametros
    public function __set($propriedade, $valor)
    {
        #checa se a propriedade existe
        #property_exists($class, $property)
        throw new Exception($propriedade . "nao existe");        
    }

    public function __get($propriedade)
    {
        throw new Exception("A $propriedade nao existe");
    }
}
try{
    $cliente = new Clientes();
    $cliente->nome = 'Aline dos Santos';
    $cliente->email = 'aline.santos@gmail.com';
    
    echo 'Nome do cliente; ' . $cliente->nome;
    echo '<br>Email do cliente; ' . $cliente->email;
}catch (Exception $erro){
	echo "Erro: " . $erro->getMessage();
}