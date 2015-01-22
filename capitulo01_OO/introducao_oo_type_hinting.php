<?php

class Clientes
{
	protected $dados = array();
	
	public function setDados(array $dados)
	{
		$this->dados = $dados;
	}
	
	public function getDados()
	
	{
		return $this->dados;;
	}

}


$cliente = new Clientes();
$cliente->setDados(array('nome' => 'Aline dos Santos'));

print_r($cliente->getDados());




