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
    
    // etodos Magicos
    public function __construct()
    {}

    public function __set($propriedade, $valor)
    {
        if (array_key_exists($propriedade, $this->propriedades)) {
            return $this->propriedades[$propriedade];
        }
    }

    public function __get($propriedade)
    {
        if (array_key_exists($propriedade, $this->propriedades)) {
            return $this->propriedades[$propriedade];
        }
    }

    public function __call($metodo, $parametro)
    {
        // ega o prefico 3 primeiros caractere
        $tipo = substr($metodo, 0, 3);
        // ega o nome do parametro que esta sendo acesado
        $propriedade = substr($metodo, 3);
        
        $propriedade = strtolower($propriedade);
        
        // heca se a propriedade exite
        // A constgante __CLASS__retorna o nome da classe
        if (property_exists(__CLASS__, $propriedade)) {
            switch ($tipo) { // Checa o tipo de operacao
                case 'set':
                    $this->propriedades[$propriedade] = $parametros[0];
                    break;
                case 'get':
                    return $this->propriedades[$propriedade];
                    break;
                default:
                    echo '<hr>Metodo invalido<hr>';
                    return;
            }
        } else {
            echo '<hr>Propriedade nao existe<hr>';
            return;
        }
    }

    public function __toString()
    {
        return $this->tabela;
    }
    
    
}


//PSR Boas praticas de desenvolvimento PHP