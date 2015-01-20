<?php
$dsn    = 'pgsql:host=localhost;dbname=capitulopdo';
$user   = 'dexter';
$pass   = '123456';

$conexao = new PDO($dsn, $user, $pass);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = <<<INSERTB
INSERT INTO funcionarios(
nome,email,senha
)
VALUES(
?, ?, ?
);
INSERTB;

$statement = $conexao->prepare($insert);

$statement->execute(array('Larissa','lari@gmail.com','123456'));
$statement->execute(array('Maria Oliveira','mari@gmail.com','123456'));
$statement->execute(array('Leticia Lima','le.lima@gmail.com','123456'));

echo 'Dados Inseridos!';



