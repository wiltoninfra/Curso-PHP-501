<?php


namespace Lib;


class Banco
{
    // onexao com banco
    protected $conn;

    protected $tabela = null;

    public function __construct()
    {
        global $config;
        $dsn = "$config[driver]:host=$config[host];dbname=$config[dbname]";
        $username = $config['username'];
        $passwd = $config['passwd'];
        $this->conn = new \PDO($dsn, $username, $passwd);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_SILENT);
    }

    protected function getConn()
    {
        return $this->conn;
    }

    protected function listar()
    {
        $sql = "SELECT * FROM $this->tabela";
        $query = $this->conn->query($sql);
        $registros = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $registros;
    }

    protected function buscarRegistro($condicao)
    {
        $sql = "SELECT * FROM $this->tabela WHERE $condicao";
        $query = $this->conn->query($sql);
        $registro = $query->fetch(\PDO::FETCH_ASSOC);
        return $registro;
    }

    protected function inserir(array $dados)
    {
        // NSERT INTO tabela(campo1, campo2) VALUES('VALOR1', 'VALOR2');
        foreach ($dados as $campo => $valor) {
            $campos[] = $campo;
            $holders[] = '?';
        }
        
        $campos = implode(',', $campos);
        $holders = implode(',', $holders);
        $sql = "INSERT INTO $this->tabela ($campos) VALUES ($holders)";
        
        $statement = $this->conn->prepare($sql);
        return $statement->execute(array_values($dados));
    }

    protected function alterar(array $dados, $id)
    {
        // PDATE TABELA SET CAMPO1 = 'VALOR', CAMPO2 = 'VALOR' WHERE CONDICAO
        foreach ($dados as $campo => $valor) {
            $sets[] = "$campo=?";
        }
        
        $sets = implode(',', $sets);
        
        $sql = "UPDATE $this->tabela SET $sets WHERE id = ?";
    
        $valores = array_values($dados);
        $valores[] = $id;
        
        $statement = $this->conn->prepare($sql);
        
        return $statement->execute($valores);
    }

    protected function excluir($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        return $statement->execute(array(
            $id
        ));
    }
}


$conexta = new Banco();
$banco->conectar();

var_dump($banco);






