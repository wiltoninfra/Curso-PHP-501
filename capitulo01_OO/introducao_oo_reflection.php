<?php

/**Reflection fazer engenharia reversa de uma classe
*API que pertence ao PHP 
*
**/

class Contas {
	
	protected $saldo;
	
	public function  getSaldo()
	{
		return $this->saldo;
		
	}
	
	public function depositar($valor)
	{
		$this->saldo = $valor;
	}
}

$relection = new ReflectionClass('Contas'); //Chama Metodo Reflection e passa o nome da classe
echo '<pre>';
print_r($relection->getMethods()); //Exibe em formato de array a classe 'Contas'
echo '<hr><pre>';
print_r($relection->getProperties());

echo '<hr><pre>';
//Reflection classe nativa Exeption

$reflectionNativa = new ReflectionClass('Exception');
echo '<pre>';
print_r($reflectionNativa->getMethods());
echo '<pre>';
print_r($reflectionNativa->getProperties());


