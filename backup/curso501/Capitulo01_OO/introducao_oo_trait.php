<?php
interface contasInterface
{
	public function depositar($valor);
	public function sacar($valor);
	public function verSaldo($valor);
}

trait Log
{
	use Validacao;
	public function geraLog()
	{
		echo "<hr>";
		echo "Log Gerado: " . date("d-m-Y H:i:s");
	}
}

class ContasAbstract implements contasInterface
{
	use Log;
	public function depositar($valor){}
	public function sacar($valor){}
	public function verSaldo($valor){}
}

trait Validacao
{
	public function validar()
	{
		echo "<hr>Validando...<hr>";
	}
}
final class ContaPoupanca extends ContasAbstract
{

}

final class ContaCorrente extends ContasAbstract
{

}

$poupanca = new ContaPoupanca();
$poupanca->geraLog();
$corrente = new ContaCorrente(); 
$corrente->geraLog();
$corrente->validar();

echo "<hr>";
var_dump($poupanca instanceof ContaPoupanca);
echo "<br>";
var_dump($poupanca instanceof ContasAbstract);
echo "<br>";
var_dump($poupanca instanceof contasInterface);
echo "<br>";
var_dump($poupanca instanceof Log);