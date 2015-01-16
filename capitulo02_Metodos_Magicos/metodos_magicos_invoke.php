<?php
class Clientes
{
    public function __invoke($parametro)
    {
        echo "Objeto usado como funcao, $parametro passado";
    }
}

$cliente = new clientes();
$cliente('Aline dos Santos');