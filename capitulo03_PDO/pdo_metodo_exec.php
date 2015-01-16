<?php 

//Conexao Postgres usando PDO

$dsn    = 'pgsql:host=localhost;dbname=capitulopdo';
$user   = 'dexter';
$pass   = '123456';

$conexaoPostgres = new PDO($dsn, $user, $pass);
$conexaoPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '<pre>';
var_dump($conexaoPostgres);

echo '<hr>';


#------------------Criando uma tabela(Postgres)------------------------------------#

$tabela = <<<TABELA

CREATE TABLE funcionarios(
id serial primary key,
nome varchar(100),
email varchar(100),
senha varchar(15));

TABELA;

$sql = 'DROP TABLE funcionarios';
$conexaoPostgres->exec($sql);

$conexaoPostgres->exec($tabela);

print_r($sql);


#--------------------Criando uma tabela(Myql)------------------------------------#


//Conexao Mysql usando PDO

$dsn    = 'mysql:host=localhost;dbname=capitulopdo';
$user   = 'root';
$pass   = '123456';

$conexaoMysql = new PDO($dsn, $user, $pass);
$conexaoMysql->setAttribute(PDO::ATTR_CONNECTION_STATUS, PDO::ERRMODE_EXCEPTION);

echo '<pre>';
var_dump($conexaoMysql);

$tabela = <<<TABELA

CREATE TABLE funcionarios(
id int primary key auto-increment,
nome varchar(100),
email varchar(100),
senha varchar(15));

TABELA;

//$sql = 'DROP TABLE funcionarios';
//$conexaoMysql->exec($sql);

$conexaoMysql->exec($tabela);

echo 'Tabelas criadas com sucesso!';
