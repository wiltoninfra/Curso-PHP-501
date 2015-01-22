<?php

# ABSTRACT: classe nao pode ser instanciada.
# somente extendida - ex: class ContaPoupanca extends Contas
abstract class Contas
{
	#atributo
	protected $saldo = 0;
	
	#metodos
	final public function sacar($valor)
	{
		if($this->checarSaque($valor)){
			$this->saldo -= $valor;
		}else{
			echo "Saldo Insuficiente!";
		}
	}
	#metodo abstract nao tem corpo - somente assinatura
	abstract function gerarLog(); 
	
	public function depositar($valor)
	{
		$this->saldo += $valor;
	}
	
	public function versaldo()
	{
		echo 'Saldo: ' . $this->saldo;
	}
	
	protected function checarSaque($valor)
	{
		if($this->saldo >= $valor){
			return true;
		}
	}
}

class ContaPoupanca extends Contas
{
	
	public function gerarLog(){}
	
	public function aplicar($valor)
	{
		echo "Aplicacao efetuada, valor: " . $valor;
	}
	
	public function depositar($valor)
	{
		parent::depositar($valor);
		echo "<br> Metodo executado da classe poupanca<br>";
	}
}

class ContaCorrente extends Contas
{
	protected $limite = 1000;
	
	public function gerarLog(){}
	
	public function verLimite()
	{
		echo "Limite: " . $this->limite;
	}
}

class Contateste extends Contas
{
	public function gerarLog(){}
}


$poupanca = new ContaPoupanca();
$poupanca->aplicar(300);
$poupanca->depositar(200);
echo "<br>";
$poupanca->versaldo();
echo "<hr>";
$corrente = new ContaCorrente();
$corrente->depositar(400);
$corrente->verLimite();
echo "<hr><pre>";

var_dump($poupanca);
echo "<hr>";
var_dump($corrente);
echo "<hr>";

#instanceof -> checar a instancia de uma classe
#quando cria um objeto 'e do tipo da classe que instacionou
var_dump($poupanca instanceof ContaPoupanca);
echo "<br>";
var_dump($poupanca instanceof Contas);

#metodo final




