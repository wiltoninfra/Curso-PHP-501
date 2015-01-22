<?php

class Clientes
{
    /**
     * O método mágico toString sempre retorna uma string
     * @return string
     */
    public function __toString()
    {
        return __CLASS__; #Retornando o nome da classe
    }
}

$cliente = new Clientes();

echo $cliente;