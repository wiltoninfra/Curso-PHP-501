<?php
namespace Model;

use Lib\Mapper as Mapeamento;

class Funcionarios
{
    public function __contruct()
    {
        $mapper = new Mapamento();
        echo '<hr>' . __CLASS__ . '<hr>';
    }
}