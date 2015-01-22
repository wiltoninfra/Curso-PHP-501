<?php

class Clientes
{

    protected $propriedades = array(
        'nome' => null,
        'email' => null
    );

    public function __set($propriedade, $valor)
    {
        if (array_key_exists($propriedade, $this->propriedades)) {
            $this->propriedades[$propriedade] = $valor;
        }
    }

    public function __get($propriedade)
    {
        if (array_key_exists($propriedade, $this->propriedades)) {
            return $this->propriedades[$propriedade];
        } else {
            echo "$propriedade nao existe";
            exit();
    }
}
}

$cliente = new Clientes();
$cliente->nome = 'Alino dos Santos';
$cliente->email = 'aline.santos@gmail.com';

echo 'Nome do Cliente:' . $cliente->nome;
echo '<br>Email:' . $cliente->email;