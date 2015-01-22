<?php
class Contas
{
    protected  $saldo = 0;
    
    public function sacar($valor)
    {
        if($this->checarSaque($valor)){
            $this->saldo -= $valor;
        }else{
            echo 'Saldo insuficiente!';
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
    
    protected function checarSaque($valor)
    {
        if($this->saldo >= $valor){
            return true;
        }
    }
}

$conta = new Contas();
$conta->depositar(200);
var_dump($conta->checarSaque());
$conta->sacar(500);
echo '<hr>';
$conta->verSaldo();


