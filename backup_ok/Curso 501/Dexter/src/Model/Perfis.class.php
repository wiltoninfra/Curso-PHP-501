<?php
namespace Model;

class Perfis extends AbstractModel
{

    protected $tabela = 'perfis';

    protected $propriedades = array(
        'id' => null,
        'descricao' => null
    );
}