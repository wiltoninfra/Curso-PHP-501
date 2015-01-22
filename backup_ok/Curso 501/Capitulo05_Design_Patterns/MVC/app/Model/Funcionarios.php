<?php
namespace Model;
use Lib\DataMapper;

class Funcionarios
{
    use \Controller\FuncionariosController;

    protected $tabela = 'funcionarios';
    private   $mapper;
    
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
        
    /**
     * Método para geração de set e get Dinâmico
     * Obrigatório o uso do prefixo set ou get
     *
     * @param automático $metodo
     * @param automático $parametros
     */
    public function __call($metodo, $parametro)
    {
        // ega o prefixo 3 primeiros caracteres
        $tipo = substr($metodo, 0, 3);
        // ega o nome do paramentro que está sendo acessado
        $propriedade = substr($metodo, 3);
    
        $propriedade = strtolower($propriedade);
        // checa se a propriedade existe
        // A constante __CLASS__ retorna o nome da classe
        if (property_exists(__CLASS__, $propriedade)) {
            switch ($tipo) { // Checa o tipo da operação
            	case 'set':
            	    $this->$propriedade = $parametro[0];
            	    break;
            	case 'get':
            	    return $this->$propriedade;
            	    break;
            	default:
            	    throw new Exception('Método inválido');
            }
        } else {
            throw new Exception('Propriedade não existe');
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
    
    public function setDados(array $dados)
    {

        foreach ($dados as $campo => $valor)
        {
            if($campo == 'senha' && $valor != '')          
                $this->$campo = isset($dados[$campo]) ? md5($dados[$campo]) : null;
            else            
                $this->$campo = isset($dados[$campo]) ? $dados[$campo] : null;
        }
        
        
    
        return $dados;
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