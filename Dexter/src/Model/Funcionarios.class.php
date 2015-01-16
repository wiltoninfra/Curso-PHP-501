<?php
namespace Model;

class Funcionarios extends AbstractModel
{
    protected $tabela = 'funcionarios';
    protected $propriedades = array(
        
        'id'        => null,
        'email'     => null,
        'prf_id'    => null,
        'nome'      => null,
        'sehha'     => null
    )
    ;
}