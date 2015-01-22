<?php
namespace Model;

use Lib\Mapper as Mapeamento;

class Funcionarios
{

    public function __construct()
    {
        $mapper = new Mapeamento();
        echo '<hr>' . __CLASS__ . '<hr>';
    }
}