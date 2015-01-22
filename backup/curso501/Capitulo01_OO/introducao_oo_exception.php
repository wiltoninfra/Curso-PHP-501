<?php
class Contas
{
	#atributo
	protected $saldo = 0;
	
	#metodos
	public function sacar($valor)
	{
		if($this->checarSaque($valor)){
			$this->saldo -= $valor;
		}else{
			throw new Exception("Saldo Insuficiente!");
		}
	}
	
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

try{
	$conta = new Contas();
	$conta->depositar(200);
	$conta->sacar(500);
	echo "<hr>";
	$conta->versaldo();	
}catch(Exception $erro){
	echo "Erro: " . $erro->getMessage();
}
