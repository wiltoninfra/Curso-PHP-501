<?php
$insertsA = <<<INSERTA

INSERT INTO funcionarios(
nome, email, senha
)
VALUES(
'Aline dos Santos', 'aline.santos@gmail.com', '123456'
);
INSERTA;



//Conexao Postgres usando PDO

$dsn    = 'pgsql:host=localhost;dbname=capitulopdo';
$user   = 'dexter';
$pass   = '123456';

$conexaoPostgres = new PDO($dsn, $user, $pass);
$conexaoPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if($conexaoPostgres->query($insertsA)) {
 echo  "Dados Salvos com sucesso!<br>";
 } else {
    echo 'Erro ao Gravar!';
    }
    