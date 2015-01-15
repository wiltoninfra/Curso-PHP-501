<?php
namespace Model;

abstract class AbstractModel implements ModelBase

{
    use Lib\Mensagem;
    
    protected $propriedades = array();

    public function listar()
    {}

    public function inserir(array $dados)
    {}

    public function alterar(array $dados, $id)
    {}

    public function excluir($id)
    {}

    public function buscarPorId($id)
    {}
    
    public function getPropriedades()
    {
        return $this->propriedades;
    }
}


//PSR Boas praticas de desenvolvimento PHP