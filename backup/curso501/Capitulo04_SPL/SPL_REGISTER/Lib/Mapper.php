<?php
namespace Lib;

class Mapper
{
    public function __construct()
    {
        $banco = new Banco();
        echo "<hr>" . __CLASS__ . "<hr>";
    }
}