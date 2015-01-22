<?php

class Contas
{

    protected $saldo;

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo = $valor;
    }
}

$reflection = new ReflectionClass('Contas');
echo '<pre>';
print_r($reflection->getMethods());
echo '<hr><pre>';
print_r($reflection->getProperties());

#Reflection para classe Nativa Exception
echo '<hr>';
$reflectionNativa = new ReflectionClass('Exception');
echo '<pre>';
print_r($reflectionNativa->getMethods());
echo '<hr><pre>';
print_r($reflectionNativa->getProperties());
