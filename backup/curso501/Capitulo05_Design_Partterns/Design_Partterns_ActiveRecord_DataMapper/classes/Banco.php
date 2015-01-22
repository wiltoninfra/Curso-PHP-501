<?php
class Banco
{
    // conexao com banco
    protected $conn;
    
    public static $instancia;
    
    public static function instanciar()
    {
        if(! self::$instancia){
            self::$instancia = new Banco();
            self::$instancia->conectar();
        }
        
        return self::$instancia;
    }
    
    private function __construct()
    {}
    
    private function __clone()
    {}
    
    private function conectar()
    {
        global $config;
        $dsn = "$config[driver]:host=$config[host];dbname=$config[dbname]";
        $username = $config['username'];
        $passwd = $config['passwd'];
        $this->conn = new PDO($dsn, $username, $passwd);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function getConn()
    {
        return $this->conn;
    }
}