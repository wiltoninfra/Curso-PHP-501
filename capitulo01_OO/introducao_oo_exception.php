<?php

class Contas
{
	
public function depositar
{
	
}	
	//Falta uma parte do codigo

	
try {
	$conta  = new Contas();
	$conta->depositar(200);
	$conta->sacar(500);
	echo '<hr>';
	$conta->verSaldo();
	
}	catch (Exception $erro) {
	echo 'Erro: '. $erro->getMessage();
}
	
}	

