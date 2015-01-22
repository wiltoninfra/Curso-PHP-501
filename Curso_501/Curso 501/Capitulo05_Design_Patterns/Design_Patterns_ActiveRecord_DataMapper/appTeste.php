<?php
include 'classes/includes.php';
$funcionarios = new Funcionarios();
$funcionario  = $funcionarios->buscarPorId(2);
echo '<pre>';
print_r((array)$funcionario);

echo '<hr>';

echo 'Nome: ' . $funcionario->getNome();
echo '<br>Email: ' . $funcionario->getEmail();
echo '<br>Senha: ' . $funcionario->getSenha();
echo '<br>Id: ' . $funcionario->getId();

echo '<hr>';

$funcionario->setEmail('lari.souza@gmail.com.br');
$funcionario->setNome('Larissa Souza de Jesus Amado');
$funcionario->salvar();

$funcionario  = $funcionarios->buscarPorId(2);

echo 'Nome: ' . $funcionario->getNome();
echo '<br>Email: ' . $funcionario->getEmail();
echo '<br>Senha: ' . $funcionario->getSenha();
echo '<br>Id: ' . $funcionario->getId();

echo '<hr>';

$novoFuncionario = new Funcionarios();
$novoFuncionario->setNome('Funcionario Novo');
$novoFuncionario->setEmail('func_novo@gmail.com');
$novoFuncionario->setSenha('123456');
$novoFuncionario->salvar();


$funcionarios = new Funcionarios();
$registros = $funcionarios->listarFuncionarios();
foreach ($registros as $funcionario)
{
    echo 'Nome: ' . $funcionario->getNome();
    echo '<br>Email: ' . $funcionario->getEmail();
    echo '<br>Senha: ' . $funcionario->getSenha();
    //$funcionario->setSenha(md5($funcionario->getSenha()));
    //$funcionario->salvar();
    echo '<br>Id: ' . $funcionario->getId();
    
    echo '<hr>';
} 



