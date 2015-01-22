<?php
class Clientes
{
    
    /**
     * O metodo magico toString sempre retorna uma string
     * @return string
     */
    public function __toString()
    {
        return __CLASS__; #retornando o nome da classe
    }
}

$cliente = new Clientes();
echo $cliente;