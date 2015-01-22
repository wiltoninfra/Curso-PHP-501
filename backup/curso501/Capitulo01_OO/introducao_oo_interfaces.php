<?php
interface contasInterface
{
	public function depositar($valor);
	public function sacar($valor);
	public function verSaldo($valor);
}

class ContasAbstract implements contasInterface
{
	public function depositar($valor){}
	public function sacar($valor){}
	public function verSaldo($valor){}
	
}

final class ContaPoupanca extends ContasAbstract
{
	
}

final class ContaCorrente extends ContasAbstract
{

}

$poupanca = new ContaPoupanca();
$corrente = new ContaCorrente(); 


var_dump($poupanca instanceof ContaPoupanca);
echo "<br>";
var_dump($poupanca instanceof ContasAbstract);
echo "<br>";
var_dump($poupanca instanceof contasInterface);