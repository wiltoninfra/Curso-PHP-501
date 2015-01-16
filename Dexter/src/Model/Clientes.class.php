<?php
namespace Model;

class Clientes extends AbstractModel
{
    protected $tabela = 'clientes';
    protected $propriedades = array(
        'id'            => null,
        'cpf_cnpj'      => null,
        'nome_razao'    => null,
        'email'         => null,
        'telefone'      => null
    );
}




//Hidrators
