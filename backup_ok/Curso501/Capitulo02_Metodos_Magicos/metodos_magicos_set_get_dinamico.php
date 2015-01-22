<?php

class Clientes
{

    protected $nome;

    protected $email;

    protected $telefone;

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
        
        echo 'Tipo: ' . $tipo;
        echo '<br>Propriedade : ' . $propriedade;
        exit();
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
}

try {
    $cliente = new Clientes();
    $cliente->setNome('Aline dos Santos');
    $cliente->setEmail('aline.santos@gmail.com');
    echo 'Nome: ' . $cliente->getNome();
    echo '<br>Email: ' . $cliente->getEmail();
} catch (Exception $erro) {
    echo 'Erro : ' . $erro->getMessage();
}







