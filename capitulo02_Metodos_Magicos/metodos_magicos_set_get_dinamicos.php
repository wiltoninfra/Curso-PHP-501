<?php

# Metodo __call and __callstatic 
# Aplicacoes Dinamicas usam 
#
#
#

class Clientes
{

    protected $nome;
    protected $email;
    protected $telefone;

    public function __call($metodo, $parametros)
    {
        echo "Metodos chamado: $metodo";
        echo '<pre>';
        echo 'Parametros passados:<br>';
        print_r($parametros);
    }

    public static function __callstatic($metodo, $parametros)
    {
        echo "Metodos chamado: $metodo";
        echo '<pre>';
        echo 'Parametros passados:<br>';
        print_r($parametros);
    }
}

$cliente = new Clientes();
$cliente->setName('Aline dos Santos');
Clientes::testeMetodo(500, 600, 700);