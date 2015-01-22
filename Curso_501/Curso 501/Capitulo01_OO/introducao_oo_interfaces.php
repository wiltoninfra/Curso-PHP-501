<?php
interface ContasInterface
{
    public function depositar($valor);
    public function sacar($valor);
    public function verSaldo();
}

abstract class ContasAbstract implements ContasInterface
{   
    public function depositar($valor){}
    public function sacar($valor){}
    public function verSaldo(){} 
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
echo '<br>';
var_dump($poupanca instanceof ContasAbstract);
echo '<br>';
var_dump($poupanca instanceof ContasInterface);


