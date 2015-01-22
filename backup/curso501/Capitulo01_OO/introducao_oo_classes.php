<?php

#Criando uma lasse
class Contas{
	public $saldo = 0;
	
	public function sacar()
	{
		
	}
}

#instanciando objetos

$conta1 = new Contas();
$conta2 = new Contas();

echo "<pre>";
var_dump($conta1);
var_dump($conta2);