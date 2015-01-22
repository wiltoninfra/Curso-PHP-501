<?php
namespace Model;

use Lib\DataMapper;

class Funcionarios

{


    use Controller\FuncionariosControler;
    
    
    
    protected $tabela = 'funcionarios';

    private $id;
    
    private $nome;
    
   
    
    public function listarFuncionarios()
    {
        return $this->listar();
    }

    public function buscarPorId($id)
    {
        return $this->buscarRegistro("id = $id");
    }

    public function inserirFuncionario(array $dados)
    {
        return $this->inserir($dados);
    }

    public function alterarFuncionario(array $dados, $id)
    {
        return $this->alterar($dados, $id);
    }

    public function excluirFuncionario($id)
    {
        return $this->excluir($id);
    }
}