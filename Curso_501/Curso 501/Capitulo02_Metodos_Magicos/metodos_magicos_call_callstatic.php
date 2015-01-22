<?php
class Clientes
{
    protected $nome;
    protected $email;
    protected $telefone;
    
    public function __call($metodo, $parametros)
    {
        echo "Método chamado: $metodo";
        echo '<pre>';
        echo 'Parametros passados:<br>';
        print_r($parametros);
    }
    
    public static function __callstatic($metodo, $parametros)
    {
        echo "Método chamado: $metodo";
        echo '<pre>';
            echo 'Parametros passados:<br>';
                print_r($parametros);
    }
    
}

$cliente = new Clientes();
$cliente->setNome('Aline dos Santos');
echo '<hr>';
Clientes::testeMetodo(500, 600, 700);








