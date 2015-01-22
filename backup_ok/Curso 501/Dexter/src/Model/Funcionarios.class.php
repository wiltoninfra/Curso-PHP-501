<?php
namespace Model;

class Funcionarios extends AbstractModel
{

    protected $tabela = 'funcionarios';

    protected $propriedades = array(
        'id' => null,
        'nome' => null,
        'email' => null,
        'senha' => null,
        'prf_id' => null
    );
}