<?php
namespace Model;

use Lib\Mapper;

class Clientes
{

    public function __construct()
    {
        $mapper = new Mapper();
        echo "<hr>" . __CLASS__ . "<hr>";
    }
}