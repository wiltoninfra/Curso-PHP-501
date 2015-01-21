<?php


include 'classes/includes.php';


$funcionarios = new Funcionarios();
$funcionario = $funcionarios->buscarPorId(2);

echo '<pre>';

print_r($funcionario);