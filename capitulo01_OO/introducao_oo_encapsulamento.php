<?php

class Contas
{
	protected $saldo = 0;
	
	public function sacar($valor)
	{
		if($this->checarSaldo($valor)) {
			
		
		$this->saldo -= $valor;
	}else {
		echo 'Saldo Insuficiente!';
	}
}

	public function depositar($valor)
	{
		$this->saldo += $valor;
	}

	public function verSaldo()
	{
		echo 'Saldo: ' . $this->saldo;
	}
	
	public function checarSaldo($valor)
	{
		if($this->saldo >= $valor) {
			return true;
			
		}
	}
		private function checarSaque($valor)
		{
			if($this->saldo >= $valor) {
				return true;
		}
	}
}


/*

$conta = new Contas();
$conta->saldo = 100;
echo 'Saldo: ' . $conta->saldo;

*/
	
$conta = new Contas();
$conta->depositar(200);
var_dump($conta->checarSaque(100));
$conta->sacar(500);
echo '<hr>';
$conta->verSaldo();



