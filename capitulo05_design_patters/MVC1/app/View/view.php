<?php
namespace View;

class View
{
	public static function carregar($template, $dados = null)
	{
	    #retorna diretorio que estou
		include __DIR__ . '/../../templates/topo.php';
		include __DIR__ . "/../../$template.php"; 
	}
}