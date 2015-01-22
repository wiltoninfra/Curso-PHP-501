<?php

include 'classes/includes.php';
$funcionarios = new Funcionarios();
$funcionario = $funcionarios->buscarPorId(2);

echo "<pre>";
print_r($funcionario);

echo "<hr>";
echo "Nome: " . $funcionario->getNome() . "<br>";
echo "Email: " . $funcionario->getEmail() . "<br>";
echo "Senha: " . $funcionario->getSenha() . "<br>";
echo "id: " . $funcionario->getId() . "<br>";


echo "<hr>";
$funcionario->setEmail('lari.souza@gmail.com'); 
$funcionario->salvar();

$funcionario = $funcionarios->buscarPorId(2);
echo "<hr>";
echo "Nome: " . $funcionario->getNome() . "<br>";
echo "Email: " . $funcionario->getEmail() . "<br>";
echo "Senha: " . $funcionario->getSenha() . "<br>";
echo "id: " . $funcionario->getId() . "<br>";

$novoFuncionario = new Funcionarios();
$novoFuncionario->setNome('Funcionario Novo');
$novoFuncionario->setEmail('func_email@gmail.com');
$novoFuncionario->setSenha('123456');
$novoFuncionario->salvar();

echo "<hr>";
$funcionarios = new Funcionarios();
$registros = $funcionarios->listarFuncionarios();

foreach ($registros as $funcionario){
    echo "Nome: " . $funcionario->getNome();
    echo "<br>Email: " . $funcionario->getEmail();
    echo "<br>Senha: " . $funcionario->getSenha();
    #$funcionario->setSenha(md5($funcionario->getSenha()));
    #$funcionario->salvar();
    echo "<br>id: " . $funcionario->getId();
    
    echo "<hr>";
}