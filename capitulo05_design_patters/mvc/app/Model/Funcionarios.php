<?php

Namespace Model;

class Funcionarios extends Banco
{
    protected $tabela = 'funcionarios';
    
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