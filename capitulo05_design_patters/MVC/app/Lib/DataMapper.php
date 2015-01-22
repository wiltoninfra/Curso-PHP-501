<?php

namespace Lib;



use Funcionarios;


class DataMapper 
{

    private $conexao;
    protected $tabela = null;
    private $model;

    public function __construct($tabela)
    {
        $this->tabela   = $tabela;
        $this->model    = "Model\\" .ucfirst($this->tabela);
       // echo $this->model;
       // exit();
        $banco          = Banco::instanciar();
        $this->conexao = $banco->getConn();
    }
    
    public function listar()
    {
        $sql = "SELECT * FROM $this->tabela";
        $query = $this->conexao->query($sql);
        $objetos = array();
        while($objeto = $query->fetchObject(ucfirst($this->tabela))){
            $objetos[] = $objeto;
        }
        return $objetos;
    }
    

    public function buscarRegistro($condicao)
    {
        $sql = "SELECT * FROM $this->tabela WHERE $condicao";
        $query = $this->conexao->query($sql);
        $registro = $query->fetchObject(ucfirst($this->tabela));
        return $registro;
    }

    public function inserir(array $dados)
    {
        // NSERT INTO tabela(campo1, campo2) VALUES('VALOR1', 'VALOR2');
        foreach ($dados as $campo => $valor) {
            $campos[] = $campo;
            $holders[] = '?';
        }
        
        $campos = implode(',', $campos);
        $holders = implode(',', $holders);
        $sql = "INSERT INTO $this->tabela ($campos) VALUES ($holders)";
        
        $statement = $this->conexao->prepare($sql);
        return $statement->execute(array_values($dados));
    }

    public function alterar(array $dados, $id)
    {
        // PDATE TABELA SET CAMPO1 = 'VALOR', CAMPO2 = 'VALOR' WHERE CONDICAO
        foreach ($dados as $campo => $valor) {
            $sets[] = "$campo=?";
        }
        
        $sets = implode(',', $sets);
        
        $sql = "UPDATE $this->tabela SET $sets WHERE id = ?";
    
        $valores = array_values($dados);
        $valores[] = $id;
        
        $statement = $this->conexao->prepare($sql);
        
        return $statement->execute($valores);
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        return $statement->execute(array(
            $id
        ));
    }
}









