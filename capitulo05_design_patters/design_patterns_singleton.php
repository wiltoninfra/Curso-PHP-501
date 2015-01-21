<?php

class Clientes

{

    public static $instancia;

    public static $instacias;

    public static function instanciar()
    {
        if (! self::$instancia) {
            self::$instancia = new Clientes();
        }
        return self::$instancia;
    }

    private function __construct()
    {
        self::$instacias ++;
    }

    private function __clone()
    {}
}

$cliente1 = Clientes::instanciar();
$cliente2 = Clientes::instanciar();
$clientes3 = Clientes::instanciar();

echo 'Total de Instancias: ' . Clientes::$instacias;