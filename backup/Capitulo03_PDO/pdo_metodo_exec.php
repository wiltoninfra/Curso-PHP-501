<?php
#Conexão com postgres
$dsn    = 'pgsql:host=localhost;dbname=capitulopdo';
$user   = 'dexter';
$pass   = '123456';

$conexaoPostgres = new PDO($dsn, $user, $pass);
$conexaoPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

#-----------------------Criando uma Tabela(Postgres)--------------------------
$tabela = <<<TABELA
CREATE TABLE funcionarios(
id serial primary key,
nome varchar(100),
email varchar(100),
senha varchar(15)
);
TABELA;
#apagando a tabela
$sql = 'DROP TABLE funcionarios';
$conexaoPostgres->exec($sql);
#Criando a tabela
$conexaoPostgres->exec($tabela);
#------------------------------------------------------------------------------
$dsn    = 'mysql:host=localhost;dbname=capitulopdo';
$user   = 'root';
$pass   = '123456';
$conexaoMysql = new PDO($dsn, $user, $pass);
$conexaoMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$tabela = <<<TABELA
CREATE TABLE funcionarios(
id int primary key auto_increment,
nome varchar(100),
email varchar(100),
senha varchar(15)
);
TABELA;

#Apagando a tabela
$sql = 'DROP TABLE funcionarios';
$conexaoMysql->exec($sql);

#Criando a tabela
$conexaoMysql->exec($tabela);

echo 'Tabelas criadas com sucesso!';

