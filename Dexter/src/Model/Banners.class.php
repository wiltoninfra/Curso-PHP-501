<?php
namespace Model;

class Banners extends AbstractModel
{
    protected $tabela = 'banners';
    protected $propriedades = array (
    	'id' => null,
        'descricao' => null,
        'imagem' => null        
    );
}
