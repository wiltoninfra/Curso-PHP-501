<?php

class Clientes
{

    protected $propriedades = array(
        'nome' => null,
        'email' => null
    );
    
    // brigatoriamente recebe 2 parametros
    public function __set($propriedade, $valor)
    {
        if (array_key_exists($propriedade, $this->propriedades)) {
            $this->propriedades[$propriedade] = $valor;
        }else {
            echo "$propriedade nao existe";
            exit();
        }
        
    }

    public function __get($propriedade)
    {
        if (array_key_exists($propriedade, $this->propriedades)) {
            return $this->propriedades[$propriedade];
        }else {
            echo "$propriedade nao existe";
            exit();
        }
        
    }
}

$cliente = new Clientes();
$cliente->nome = 'Aline dos Santos';
$cliente->email = 'aline.santos@gmail.com';

echo 'Nome do cliente; ' . $cliente->nome;
echo '<br>Email do cliente; ' . $cliente->email;
