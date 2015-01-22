<?php

namespace Model;

class Banners extends AbstractModel
{
    protected $tabela = "banners";
    protected $propriedaes = array(
        'id' => null,
        'descricao' => null,
        'imagem' => null
    );
}