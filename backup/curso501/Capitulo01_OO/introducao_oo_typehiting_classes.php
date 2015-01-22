<?php
#typehiting -> determina o tipo parametro que ira ser passado
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
	
	#ex: typehiting
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

echo 'nome: ' .  $cliente->getNome();
echo '<br>email: ' .  $cliente->getContato()->getEmail();