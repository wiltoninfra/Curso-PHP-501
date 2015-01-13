<?php

abstract class Contas
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

class ContaPoupanca extends Contas
{
	public function aplicar($valor)
	{
		echo 'Aplicacao efetuada, valor: ' . $valor;
	}
	
	public function depositar($valor)
	{
		parent::depositar($valor); //chama metodo da classe PAI
		echo '<br>Metodo Executado da classe poupanca<br>';
	}
}

Class ContaCorrente extends Contas
{
	protected $limite;
	
	public function verLimite()
	{
		echo 'Limite: ' . $this->limite;
	}
	
	}

	

$conta = new Contas();echo '<hr>';
$conta->depositar(200);
$conta->verSaldo();

echo '<hr>';

$poupanca = new ContaPoupanca();
$poupanca->aplicar(300);
$poupanca->depositar(500);

echo '<hr>'; 
$poupanca->verSaldo();

echo '<hr>';


$corrente = new ContaCorrente();

$corrente->depositar(400);
$corrente->verLimite();




