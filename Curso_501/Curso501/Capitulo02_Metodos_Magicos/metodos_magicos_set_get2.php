<?php

class Clientes
{

    protected $nome;

    protected $email;

    public function __set($propriedade, $valor)
    {
        #property_exists($class, $property);
        #Esta função checa se a propriedade existe
        throw new Exception("propriedade $propriedade não existe");
    }

    public function __get($propriedade)
    {
       throw new Exception("propriedade $propriedade não existe");
    }
}

try{
    $cliente = new Clientes();
    $cliente->nome = 'Aline dos Santos';
    $cliente->email = 'aline.santos@gmail.com';
    
    echo 'Nome do Cliente:' . $cliente->nome;
    echo '<br>Email: ' . $cliente->email;
}catch (Exception $erro){
    echo 'Erro: ' . $erro->getMessage();
}