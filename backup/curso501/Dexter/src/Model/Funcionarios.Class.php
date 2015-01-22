<?php

namespace Model;

class Functionarios extends AbstractModel
{
    protected $tabela = "conteudos";
    protected $propriedades = array(
    	'id' => null,
        'email' => null,
        'prf_id' => null,
        'nome' => null,
        'senha' => null
    );
}