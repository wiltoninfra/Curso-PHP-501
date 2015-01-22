<?php
interface ContasInterface
{
    public function depositar($valor);
    public function sacar($valor);
    public function verSaldo();
}

trait Validacao
{
    public function validar()
    {
        echo '<hr>Validando....<hr>';
    }
}

trait Log
{
    use Validacao;
    public function gerarLog()
    {
        echo '<hr>';
        echo 'Log Gerado:' . date('d-m-Y H:i:s');
    }
}

abstract class ContasAbstract implements ContasInterface
{   
    use Log;
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
$poupanca->gerarLog();
$corrente = new ContaCorrente();
$corrente->gerarLog();
$corrente->validar();

echo '<hr>';
var_dump($poupanca instanceof ContaPoupanca);
echo '<br>';
var_dump($poupanca instanceof ContasAbstract);
echo '<br>';
var_dump($poupanca instanceof ContasInterface);
echo '<br>';
var_dump($poupanca instanceof Log);


