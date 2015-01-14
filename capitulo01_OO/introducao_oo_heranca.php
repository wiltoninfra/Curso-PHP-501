<?php

abstract class Contas // Classe Abstrata PAI
{
	protected $saldo = 0;
	
	final public function sacar($valor) // Metodo
	{
		if($this->checarSaldo($valor)) {
			
		
		$this->saldo -= $valor;
	}else {
		echo 'Saldo Insuficiente!';
	}
}
	abstract function gerarLog(); // Metodo Abstrato
	
	
	public function depositar($valor) // Metodo
	{
		$this->saldo += $valor;
	}

	public function verSaldo() // Metodo
	{
		echo 'Saldo: ' . $this->saldo;
	}
	
	public function checarSaldo($valor) // Metodo
	{
		if($this->saldo >= $valor) {
			return true;
			
		}
	}
		private function checarSaque($valor) // Metodo
		{
			if($this->saldo >= $valor) {
				return true;
		}
	}
}

class ContaPoupanca extends Contas //Heranca Classe extendida FILHA
{
	public function gerarLog() {}  // Chamada do Metodo Abstrato 
	
	public function aplicar($valor) // Metodo
	{
		echo 'Aplicacao efetuada, valor: ' . $valor;
	}
	
	public function depositar($valor) // Metodo
	{
		parent::depositar($valor); //chama metodo da classe PAI
		echo '<br>Metodo Executado da classe poupanca<br>';
	}
}

final Class ContaCorrente extends Contas // Classe Filha Estendida
{
	
	protected $limite;
	
	public function gerarLog() {} //Metodo
	
	public function verLimite() //Metodo
	{
		echo 'Limite: ' . $this->limite;
	}
	
	}
	class  Contateste extends Contas
	{
		public function gerarLog() {} //Metodo
	}
	
/*
$conta = new Contas();echo '<hr>';
$conta->depositar(200);
$conta->verSaldo();
*/
echo '<hr>';

$poupanca = new ContaPoupanca(); // Instanciando Classe
$poupanca->aplicar(300);
$poupanca->depositar(500);

echo '<hr>'; 
$poupanca->verSaldo();

echo '<hr>';


$corrente = new ContaCorrente(); // Instanciando Classe

$corrente->depositar(400);
$corrente->verLimite();

echo '<hr><pre>';
var_dump($poupanca);


/*
 * Resultado
 * object(ContaPoupanca)#1 (1) {
 * ["saldo":protected]=>
 * int(500)
 *}
 */


echo '<hr><pre>';
var_dump($corrente);


echo '<hr>';
var_dump($poupanca instanceof ContaPoupanca); // Poupanca 'e uma instancia Conta popanca (TRUE)

/* Classes e Metodos Abstrato */

echo '<hr>';
var_dump($poupanca instanceof  Contas); // Poupanca e uma instancia de Contas (TRUE) (Extende)





/*
 * metodos (function final) nao podem ser sobrescritos apenas utilizado pelas filhas,
 * classe sem derivacao (class final)
 * interface  model da classe nao existe metodo concreto dentro de interface nem atributos apenas metodos
 * 
Fatal error: Cannot override final method Contas::depositar() in /var/www/capitulo01_OO/introducao_oo_heranca.php on line 59
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

