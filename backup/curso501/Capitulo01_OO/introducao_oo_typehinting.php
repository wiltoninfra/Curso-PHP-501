<?php
#typehiting -> determina o tipo parametro que ira ser passado
class Clientes
{
	protected $dados = array();
	
	#ex: typehiting
	public function setDados(array $dados)
	{
		$this->dados = $dados;
	}
	
	public function getDados()
	{
		return $this->dados;
	}
}
$cliente = new Clientes();
$cliente->setDados(array('nome'=>'Aline dos Santos'));

print_r($cliente->getDados());