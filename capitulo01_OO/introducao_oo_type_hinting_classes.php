<?php

class Clientes
{
	protected  $nome;
	protected  $contato;
	
	
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

/*
$cliente = new Clientes();

$cliente->setNome(array('Cliente' => 'Aline dos Santos'));

print_r($cliente->getNome());
*/

$contato = new Contatos();

$contato->setEmail('aline@gmail.com');


$cliente = new Clientes();

$cliente->setNome('Aline dos Santos');

//$cliente->setContato('sdftff@sdas');


echo 'Nome: ' .$cliente->getNome();
echo '<br>Email: ' . $cliente->getContato()->getEmail();




print_r($cliente->getNome());





echo '<br>';

$contato = new Contatos();

$contato->set(array('Contato' => 'Wilton Guilherme'));

print_r($cliente->getContato());



