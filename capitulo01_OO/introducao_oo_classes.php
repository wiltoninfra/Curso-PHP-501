<?php
#Criando uma Classe

class Contas {
	
	public $saldo = 0;
	
	public function sacar()
	{
		
	}
}

#Instanciando Objeto

$contas1 = new Contas();
$contas2 = new Contas();

echo '<pre>';

var_dump($contas1);
var_dump($contas2);
