<?php

class Clientes
{

    protected $nome;

    protected $email;

    protected $telefone;

    /**
     * Metodo para gerar set e get dinamico
     * Obrigatorio o uso do prefixo set ou get
     * 
     * @param automatico $metodo
     *            $param automatico $parametros
     */
    public function __call($metodo, $parametro)
    {
        // pega o prefixo 3 primeiros caracteres
        $tipo = substr($metodo, 0, 3);
        // pega o nome do parametro que est'a sendo acessado
        $propriedade = substr($metodo, 3);
        
        $propriedade = strtolower($propriedade);
        
        echo "Tipo: " . $tipo;echo"<br>";
        echo "Propriedade: " . $propriedade;
        exit();
        
        #Checa se a propriedade existe
        #A constante __CLASS__ retorna o nome da classe
        if (property_exists(__CLASS__, $propriedade)) {
            switch ($tipo) { //Checa o tipo da operacao
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
}

try{
    $cliente = new Clientes();
    $cliente->setNome('Aline dos Santos');
    $cliente->setEmail('aline.santos@gmail.com');
    echo "Nome: " . $cliente->getNome();
    echo "<br>email: " . $cliente->getNome();
}catch(Exception $erro){
    echo "Erro: " . $erro->getMessage();
}
