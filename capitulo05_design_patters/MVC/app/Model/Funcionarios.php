<?php

namespace Model;

use Lib\DataMapper;


class Funcionarios
{

    use \Controller\FuncionariosController;

    protected $tabela = 'funcionarios';

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
    {
        $this->$propriedade = $valor;
    }

    public function __call($metodo, $parametro)
    {
        // pega o prefixo 3 primeiros caracteres
        $tipo = substr($metodo, 0, 3);
        // pega o nome do parametro que est'a sendo acessado
        $propriedade = substr($metodo, 3);
        
        $propriedade = strtolower($propriedade);
              
        // heca se a propriedade existe
        // constante __CLASS__ retorna o nome da classe
        if (property_exists(__CLASS__, $propriedade)) {
            switch ($tipo) { // Checa o tipo da operacao
                case 'set':
                    $this->$propriedade = $parametro[0];
                    break;
                case 'get':
                    return $this->$propriedade;
                    break;
                default:
                    throw new Exception("Metodo Invalido");
            }
        } else {

            throw new Exception("Propriedade nao existe");
        }
    }
    
    public function salvar()
    {   
        $dados = $this->getDados();
        if(isset($this->id)){
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
            'senha' => $this->senha
        );
        
        return $dados;
    }
    
    public function setDados(Funcionarios $objeto, array $dados)
    {
        $objeto->id    = isset($dados['id']) ? $dados['id'] : null;
        $objeto->nome  = isset($dados['nome']) ? $dados['nome'] : null;
        $objeto->email = isset($dados['email']) ? $dados['email'] : null;
        if (! empty($dados['senha'])){
            $objeto->senha = md5($dados['senha']);
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

    protected function inserirFuncionario(array $dados)
    {
        return $this->mapper->inserir($dados);
    }

    protected function alterarFuncionario(array $dados, $id)
    {
        return $this->mapper->alterar($dados, $id);
    }

    public function excluirFuncionario($id)
    {
        return $this->mapper->excluir($id);
    }
}