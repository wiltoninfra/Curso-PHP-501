<?php
namespace Model;

abstract class AbstractModel implements Modelbase
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
    
    // Metodos magicos
    public function __construct()
    {}

    public function __set($propriedade, $color)
    {}

    public function __get($propriedade)
    {
        if (array_key_exists($propriedade, $this->propriedades)){
            $this->propriedades[$propriedade] = $valor;
        }
    }

    public function __call($metodo, $paramentro)
    {
        // pega o prefixo 3 primeiros caracteres
        $tipo = substr($metodo, 0, 3);
        // pega o nome do parametro que est'a sendo acessado
        $propriedade = substr($metodo, 3);
        
        $propriedade = strtolower($propriedade);
        
        echo "Tipo: " . $tipo;
        echo "<br>";
        echo "Propriedade: " . $propriedade;
        exit();
        
        // heca se a propriedade existe
        // constante __CLASS__ retorna o nome da classe
        if (array_key_exists($propriedade, $this->$propriedade)) {
            switch ($tipo) { // Checa o tipo da operacao
                case 'set':
                    $this->propriedades[$propriedade] = $parametro[0];
                    break;
                case 'get':
                    return $this->propriedades[$propriedade];
                    break;
                default:
                    echo "<hr>Metodo Invalido</hr>";
                    return;
            }
        } else {
            echo "<hr>Propriedade nao existe</hr>";
        }
    }

    public function __toString()
    {
        return $this->tabela;
    }
}