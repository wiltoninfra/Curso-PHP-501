<?php
namespace Controller;

trait FuncionariosController
{
	public function gerenciar()
	{
		return $this->listarFuncionarios();
	}
}