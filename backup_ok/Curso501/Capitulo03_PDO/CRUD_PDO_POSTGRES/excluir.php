<?php
include 'classes/includes.php';
$funcionarios = new Funcionarios();

$id = isset($_GET['id']) ? $_GET['id'] : null;

if($funcionarios->excluirFuncionario($id)){
    header('location:index.php');
}