<?php

class Clientes
{

    protected $nome;
    protected $email;
        

    public function __set($propriedade, $valor)
        {
        throw new Exception("propriedade $propriedade nao existe");
        }
        
   #property_exist()
   #Checa se a pripriedade existe 
    
    public function __get($propriedade)
        {
        throw new Exception("propriedade $propriedade nao existe");
        }
    
}

    try {
        
        $cliente = new Clientes();
        $cliente->nome = 'Alino dos Santos';
        $cliente->email = 'aline.santos@gmail.com';
        echo 'Nome do Cliente:' . $cliente->nome;
        echo '<br>Email:' . $cliente->email;
    }