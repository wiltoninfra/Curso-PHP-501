<?php

namespace Model;

class Menus extends AbstractModel
{
    protected $tabela = "menus";
    protected $propriedades = array(
    	'id' => null,
        'prf_id' => null,
        'descricao' => null,
        'link' => null
    );
}