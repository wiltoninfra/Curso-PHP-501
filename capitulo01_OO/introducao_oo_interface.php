<?php

interface ContasInterface
{
	public function depositar($valor);
	public function sacar ($valor);
	public function verSaldo($valor);	
}

abstract class ContasAbstract implements ContasInterface

{
	public function depositar($valor){} 
	public function sacar ($valor){}
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


echo '<hr>';
var_dump($poupanca instanceof ContaPoupanca);
echo '<hr>';
var_dump($poupanca instanceof ContasAbstract);
echo '<hr>';
var_dump($poupanca instanceof  ContasInterface);

