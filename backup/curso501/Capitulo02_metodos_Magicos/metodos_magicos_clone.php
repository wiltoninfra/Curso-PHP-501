<?php
class Clientes
{
    public function __clone()
    {
        echo "Objeto clonado" . date('d-m-Y H:i:s');
    }
}

$cliente1 = new Clientes();
$cliente2 = clone $cliente1;