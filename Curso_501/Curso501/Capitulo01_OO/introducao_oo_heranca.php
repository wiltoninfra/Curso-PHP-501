<?php
abstract class Contas
{
    protected  $saldo = 0;
    
    final public function sacar($valor)
    {
        if($this->checarSaque($valor)){
            $this->saldo -= $valor;
        }else{
            echo 'Saldo insuficiente!';
        }
        
    }
    
    abstract public function gerarLog();
    
    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
    
    public function verSaldo()
    {
        echo 'Saldo: ' . $this->saldo;
    }
    
    protected function checarSaque($valor)
    {
        if($this->saldo >= $valor){
            return true;
        }
    }
}

class ContaPoupanca extends Contas
{
    public function gerarLog(){}
    
    public function aplicar($valor)
    {
        echo 'Aplicação efetuada, valor: ' . $valor;
    }
    
    public function depositar($valor)
    {
        parent::depositar($valor);
        echo '<br>Método executado da classe poupanca<br>';
    }
}


final class ContaCorrente extends Contas
{
    
    protected $limite = 1000;
    
    public function gerarLog(){}
    
    public function verLimite()
    {
        echo 'Limite: ' . $this->limite;
    }
}

class Contateste extends Contas
{
    public function gerarLog(){}
}


$poupanca = new ContaPoupanca();
$poupanca->aplicar(300);
$poupanca->depositar(200);
echo '<br>';
$poupanca->verSaldo();
echo '<hr>';
$corrente = new ContaCorrente();
$corrente->depositar(400);
$corrente->verLimite();

echo '<hr><pre>';
var_dump($poupanca);
echo '<hr><pre>';
var_dump($corrente);

echo '<hr>';
var_dump($poupanca instanceof ContaPoupanca);
echo '<br>';
var_dump($poupanca instanceof Contas);




