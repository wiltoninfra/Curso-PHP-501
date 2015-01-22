<?php

class Clientes
{
    public static $instancia;
    
    public static $instancias;
    
    public static function instanciar()
    {
        if(! self::$instancia){
            self::$instancia = new Clientes();
        }
        
        return self::$instancia;
    }
    
    private function __construct()
    {
        self::$instancias++;
    }
    private function __clone()
    {}
}

$cliente1 = Clientes::instanciar();
$cliente2 = Clientes::instanciar();
$cliente3 = Clientes::instanciar();
$cliente4 = Clientes::instanciar();
$cliente5 = Clientes::instanciar();

echo "Total de instancias: " .  Clientes::$instancias;