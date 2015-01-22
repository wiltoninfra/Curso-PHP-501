<?php


include 'classes/includes.php';


$funcionarios = new Funcionarios();
$funcionario = $funcionarios->buscarPorId(2);

echo '<pre>';

print_r($funcionario);

$funcionarios  = new Funcionarios();

$registros = $funcionarios->listarFuncionarios();


foreach ($registros as $funcionario) {
    
    echo 'Nome: ' . $funcionario->getNome();
    echo 'Email: ' . $funcionario->getEmail();
    echo 'Senha: ' . $funcionario->getSenha();
    
    echo 'Id: ' . $funcionario->getId();
    
    echo '<hr>';
   
 }
