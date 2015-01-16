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


//Conexao Postgres usando PDO

$dsn    = 'mysql:host=localhost;dbname=capitulopdo';
$user   = 'root';
$pass   = '123456';

$conexaoMysql = new PDO($dsn, $user, $pass);
$conexaoMysql->setAttribute(PDO::ATTR_CONNECTION_STATUS, PDO::ERRMODE_EXCEPTION);

echo '<pre>';
var_dump($conexaoMysql);
