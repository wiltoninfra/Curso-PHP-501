<?php
class Cliente



{
    
    protected $objeto;
    
    
    public $objeto;
    public function __clone()
    {
        echo 'Objeto clonado: ' . date('d-m-Y H:i:s');
    }
}

$cliente1 = new Clientes();
$cliente2 = clone $cliente1;


$cliente1->objeto = 'Objeto1';
$cliente2->objeto = 'Objeto2';

echo '<hr>';
var_dump($cliente1);
echo '<hr>';
var_dump($cliente2);