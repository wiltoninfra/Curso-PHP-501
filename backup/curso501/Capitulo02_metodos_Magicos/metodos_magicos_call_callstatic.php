<?php
class Clientes
{
	protected $nome;
	protected $email;
	protected $telefone;
	
	
	public function __call($metodo, $parametros)
	{
	    echo "Metodo chamado: $metodo";
	    echo "<pre>";
	    echo "Parametros passados:<br>";
	    print_r($parametros);
	}

	public static function __callStatic($metodo, $parametros)
	{
	    echo "Medoto chamado: $metodo";
	    echo "<pre>";
	    echo "Parametros passados:<br>";
        print_r($parametros);
	}
	
}

$cliente = new Clientes();
$cliente->setNome('Aline dos Santos');

Clientes::testeMetodo(500, 600, 700);