<?php
class Clientes
{
    public function __invoke($parametro)
    {
        echo "Objeto usado como função, $parametro passado";
    }
}

$cliente = new Clientes();
$cliente('Aline dos Santos');