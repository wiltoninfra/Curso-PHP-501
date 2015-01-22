<?php
class Contas
{
    public static $totalContas;
    
    public static function incrementar()
    {
        self::$totalContas++;
    }
}

$conta1 = new Contas();
Contas::incrementar();
$conta2 = new Contas();
Contas::incrementar();
$conta3 = new Contas();
Contas::incrementar();
$conta4 = new Contas();
Contas::incrementar();

echo 'Total de Contas:' . Contas::$totalContas;