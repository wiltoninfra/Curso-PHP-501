<?php
namespace Model;

abstract class AbstractModel implements ModelBase
{
    use Lib\Mensagem;

    protected $propriedades = array();

    protected $tabela;

    public function listar()
    {}

    public function inserir(array $dados)
    {}

    public function alterar(array $dados, $id)
    {}

    public function excluir($id)
    {}

    public function buscarPorId($id)
    {}

    public function getPropriedades()
    {
        return $this->propriedades;
    }
    
    // Métodos mágicos
    public function __construct()
    {}

    public function __set($propriedade, $valor)
    {
        if (array_key_exists($propriedade, $this->propriedades)){
            $this->propriedades[$propriedade] = $valor;
        }
    }

    public function __get($propriedade)
    {
        if (array_key_exists($propriedade, $this->propriedades)){
            return $this->propriedades[$propriedade];
        }
    }

    public function __call($metodo, $parametro)
    {
        // pega o prefixo 3 primeiros caracteres
        $tipo = substr($metodo, 0, 3);
        // ega o nome do paramentro que está sendo acessado
        $propriedade = substr($metodo, 3);
        
        $propriedade = strtolower($propriedade);
        
        // checa se a propriedade existe
        // A constante __CLASS__ retorna o nome da classe
        if (array_key_exists($propriedade, $this->propriedades)) {
            switch ($tipo) { // Checa o tipo da operação
                case 'set':
                    $this->propriedades[$propriedade] = $parametro[0];
                    break;
                case 'get':
                    return $this->propriedades[$propriedade];
                    break;
                default:
                    echo '<hr>Método inválido<hr>';
                    return;
            }
        } else {
            echo '<hr>Propriedade não existe<hr>';
            return;
        }
    }

    public function __toString()
    {
        return $this->tabela;
    }
}