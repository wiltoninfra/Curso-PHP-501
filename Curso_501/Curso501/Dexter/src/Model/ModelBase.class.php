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
    
    #Metodos mágicos
    
    public function __construct();
    public function __set($propriedade, $valor);
    public function __get($propriedade);
    public function __call($metodo, $parametro);
    public function __toString();
}