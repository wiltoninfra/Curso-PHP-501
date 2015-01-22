<?php

class Clientes
{
    protected $nome;
    protected $contato;
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setContato(Contatos $contato)
    {
        $this->contato = $contato;
    }
    
    public function getContato()
    {
        return $this->contato;
    }
    
}

class Contatos
{
    protected $email;
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
}

$contato = new Contatos();
$contato->setEmail('aline.santos@gmail.com');

$cliente = new Clientes();
$cliente->setNome('Aline dos Santos');
$cliente->setContato($contato);

echo 'Nome: ' . $cliente->getNome();
echo '<br>Email: ' . $cliente->getContato()->getEmail();

