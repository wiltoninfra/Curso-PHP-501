<?php

class Funcionarios extends Banco implements Iterator
{

    protected $tabela = 'funcionarios';

    private $query;

    protected $id;

    protected $nome;

    protected $email;

    protected $senha;

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
    #pega o prefico 3 primeiros caractere
        $tipo = substr($metodo, 0, 3);
        // ega o nome do parametro que esta sendo acesado
        $propriedade = substr($metodo, 3);
    
        $propriedade = strtolower($propriedade);
        echo 'Tipo:' .$tipo;
        echo '<br>Propriedade';
    
            #checa se a propriedade exite
                # A constgante __CLASS__retorna o nome da classe
                if(property_exists(__CLASS__, $propriedade)) {
                switch ($tipo) { //Checa o tipo de operacao
                case 'set':
                    $this->$propriedade = $parametros[0];
                    break;
                    case 'get':
                    return $this->$propriedade;
                    break;
                    default:
                    throw  new Exception('Metodo Invalido');
        }
    
                } else {
                throw new Exception('Propridade nao existe');
                }
    
    }
    
    public function salvar()
    {
        $dados = $this->getDados ();
        
        if (isset ($this->id)) {
            $this->alterarFuncionario($dados, $this->id);
            return $this;
        }
        
        $this->inserirFuncionario($dados);
        
        return $this;
    }
    
    private function getDados()
    {
        $dados = array(
        	
            'nome'  => $this->nome,
            'email' => $this->email,
            'senha'  => $this->senha             
                       
        );
    } 
    
    public function setDados (array $dados)
    {
        $this->id = isset($dados['id']) ? $dados['id'] : null;
        $this->nome = isset($dados['nome']) ? $dados['nome'] : null;
        $this->email = isset($dados['email']) ? $dados['email'] : null;
        if (isset($dados['senha'])) {
            $this->senha = md5($dados['senha']);
        } else {
            unset($this->senha);
        }
        
    }
        
    public function listarFuncionarios()
    {
        return $this->listar();
    }

    public function buscarPorId($id)
    {
        return $this->buscarRegistro("id = $id");
    }

  protected public function inserirFuncionario(array $dados)
    {
        return $this->inserir($dados);
    }

  protected public function alterarFuncionario(array $dados, $id)
    {
        return $this->alterar($dados, $id);
    }

    public function excluirFuncionario($id)
    {
        return $this->excluir($id);
    }
}