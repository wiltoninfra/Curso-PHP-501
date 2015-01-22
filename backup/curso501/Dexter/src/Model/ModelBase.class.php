<?php

namespace Model;

interface Modelbase
{
	public function listar();
	public function inserir(array $dados);
	public function alterar(array $dados, $id);
	public function excluir($id);
	public function buscarPorId($id);
	public function getPropriedades();
	
	#Metodos Magicos
	
	public function __construct();
	public function __set($propriedade, $color);
	public function __get($propriedade);
	public function __call($metodo, $paramentro);
	public function __toString();
}