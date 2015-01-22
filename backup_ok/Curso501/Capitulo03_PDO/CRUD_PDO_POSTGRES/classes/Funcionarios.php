<?php

class Funcionarios extends Banco implements Iterator
{

    protected $tabela = 'funcionarios';
    private   $query;
    
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
    	if($registro = $this->query->fetch(PDO::FETCH_ASSOC)){
    	    $this->id      = $registro['id'];
    	    $this->nome    = $registro['nome'];
    	    $this->email   = $registro['email'];
    	    $this->senha   = $registro['senha'];
    	    return true;
    	}
    	
    	return false;
    }

    public function rewind()
    {
    	$conn = $this->getConn();
    	$this->query = $conn->query('SELECT * FROM funcionarios');
    	return true;
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