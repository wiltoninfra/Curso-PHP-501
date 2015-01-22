<?php
 
class Contas
{
    public static $totalContas;
    protected $saldo;
    
    public function __construct($saldo = null)
    {
        $this->saldo = $saldo;
        self::$totalContas++;
        echo "Construtor acionado automaticamente<br>";
    }
    public function __destruct()
    {
        echo '<hr>Termino da execucao' . date('d-m-Y H:i:s') . "<hr>";
    }
}

$conta1 = new Contas(500);
$conta2 = new Contas(500);

echo 'total de contas ' . Contas::$totalContas;