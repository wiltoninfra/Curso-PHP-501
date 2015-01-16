<?php
namespace Model;

class Conteudos extends AbstractModel
{
    protected $tabela = 'conteudos';
    protected $propriedades = array(
        
        'id'        => null,
        'titulo'    => null,
        'texto'     => null
    )
    ;
}

