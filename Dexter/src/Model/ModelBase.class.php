<?php

namespace Model;

interface ModelBase 

{
	public function listar();
	public function inserir(array $dados);
	public function alterar(array $dados, $id);
	public function excluir($id);
	public function buscarPorId($id);
	public function getPropriedades();
}
	
	