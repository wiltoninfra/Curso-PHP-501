<?php
class Contas 
{
	protected $saldo;
	
	public function getSaldo()
	{
		return $this->saldo;
	}
	
	public function depositar($saldo)
	{
		$this->saldo = $valor;
	}
	
}
$reflection = new ReflectionClass('Contas');
echo "<br><pre>";
print_r($reflection->getMethods());
echo "<hr><pre>";
print_r($reflection->getProperties());

#Reflection para classe Nativa Exception
$reflectionNativa = new ReflectionClass('Exception');
echo "<hr><pre>";
print_r($reflectionNativa->getMethods());
echo "<hr><pre>";
print_r($reflectionNativa->getProperties());