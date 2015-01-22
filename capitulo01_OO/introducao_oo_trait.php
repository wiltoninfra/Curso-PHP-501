<?php

interface ContasInterface
{
	public function depositar($valor);
	public function sacar ($valor);
	public function verSaldo($valor);	
}

trait Validacao
{
	public function validar()
	{
		echo '<hr>Validando...<hr>';
	}
}


trait Log
{
	public function gerarLog()
	{
		echo '<hr>';
		echo 'Log gerado:' . date('d-m-Y H:i:s');

	}
}

abstract class ContasAbstract implements ContasInterface

{	
	use Log;
	use Validacao;
	public function depositar($valor){} 
	public function sacar ($valor){}
	public function verSaldo($valor){}
}



final class ContaPoupanca extends ContasAbstract
{
	use Log;
}

final class ContaCorrente extends ContasAbstract
{
	use Log;
}

$poupanca = new ContaPoupanca();
$poupanca->gerarLog();
$poupanca->validar();
$corrente = new ContaCorrente();
$corrente->gerarLog();
$corrente->validar();

echo '<hr>';
var_dump($poupanca instanceof ContaPoupanca);
echo '<hr>';
var_dump($poupanca instanceof ContasAbstract);
echo '<hr>';
var_dump($poupanca instanceof  ContasInterface);
echo '<hr>';
var_dump($poupanca instanceof  Log);

