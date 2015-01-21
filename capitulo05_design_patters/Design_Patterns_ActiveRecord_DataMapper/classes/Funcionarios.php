<?php

class Funcionarios extends Banco implements Iterator
{

    protected $tabela = 'funcionarios';
    
    // private $query;
    private $mapper;

    protected $id;

    protected $nome;

    protected $email;

    protected $senha;

    public function __construct()
    
    {
        $this->mapper = new DataMapper($this->tabela);
    }

    public function __set($propriedade, $valor)
    {}

    public function current()
    {
        return $this;
    }

    public function next()
    {
        return true;
    }

    public function key()
    {
        return true;
    }

    public function valid()
    {
        $conn = $this->getConn();
        if ($registro = $this->query->fetch(PDO::FETCH_ASSOC_)) {
            $this->id = $registro['id'];
            $this->nome = $registro['nome'];
            $this->email = $registro['email'];
            $this->senha = $registro['senha'];
            
            return true;
        }
    }

    public function rewind()
    {
        $conn = $this->getConn();
        $this->query = $conn->query('SELECT * FROM funcionarios');
    }

    public function __call($metodo, $parametros)
    {
        // ega o prefico 3 primeiros caractere
        $tipo = substr($metodo, 0, 3);
        // ega o nome do parametro que esta sendo acesado
        $propriedade = substr($metodo, 3);
        
        $propriedade = strtolower($propriedade);
        echo 'Tipo:' . $tipo;
        echo '<br>Propriedade';
        
        // heca se a propriedade exite
        // A constgante __CLASS__retorna o nome da classe
        if (property_exists(__CLASS__, $propriedade)) {
            switch ($tipo) { // Checa o tipo de operacao
                case 'set':
                    $this->$propriedade = $parametros[0];
                    break;
                case 'get':
                    return $this->$propriedade;
                    break;
                default:
                    throw new Exception('Metodo Invalido');
            }
        } else {
            throw new Exception('Propridade nao existe');
        }
    }

    public function listarFuncionarios()
    {
        return $this->mapper->listar();
    }

    public function buscarPorId($id)
    {
        return $this->mapper->buscarRegistro("id = $id");
    }

    public function inserirFuncionario(array $dados)
    {
        return $this->mapper->inserir($dados);
    }

    public function alterarFuncionario(array $dados, $id)
    {
        return $this->mapper->alterar($dados, $id);
    }

    public function excluirFuncionario($id)
    {
        return $this->excluir($id);
    }
}