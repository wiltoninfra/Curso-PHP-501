<?php
namespace Lib;

class Banco
{

    protected $conn;

    final public function conectar()
    {
        global $config;
        
        $dsn = "$config[driver]:host=$config[host];dbname=$config[dbname]";
        $user = $config['username'];
        $password = $config['password'];
        
        try {
            $this->conn = new \PDO($dsn, $user, $password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $erro) {
            echo 'Erro: ' . $erro->getMessage();
        }
    }

    final public function desconectar()
    {
        unset($this->conn);
    }

    final public function getConn()
    {
        return $this->conn;
    }
}












