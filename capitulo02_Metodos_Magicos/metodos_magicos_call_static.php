<?php

// Metodo __set and __get dinamicos
// Aplicacoes Dinamicas usam
//
//
//
class Clientes
{

    protected $nome;

    protected $email;

    protected $telefone;

    /**
     * Metodo para Geracao de SET e GET Dinamico
     * Obrigatorio o uso do prefixo set ou get
     *
     * @param automatico $metodo            
     * @param automatico $parametros            
     */
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
}

try {
    
    $cliente = new Clientes();
    $cliente->setName('Aline dos Santos');
    $cliente->setEmail('aline.santos@gmail.com');
    
    echo 'Nome:' . $cliente->getNome();
    echo '<br>Email: ' . $cliente-getEmail();
    } catch (Exception $erro) {
    echo 'Erro: ' .$erro->getMessage();
    
    
}


