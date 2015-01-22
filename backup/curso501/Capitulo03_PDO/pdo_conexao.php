<?php
#Conexão com postgres
$dsn    = 'pgsql:host=localhost;dbname=capitulopdo';
$user   = 'dexter';
$pass   = '123456';

$conexaoPostgres = new PDO($dsn, $user, $pass);
$conexaoPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '<pre>';
var_dump($conexaoPostgres);
echo '<hr>';

$dsn    = 'mysql:host=localhost;dbname=capitulopdo';
$user   = 'root';
$pass   = '123456';

$conexaoMysql = new PDO($dsn, $user, $pass);
$conexaoMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '<pre>';
var_dump($conexaoMysql);
echo '<hr>';