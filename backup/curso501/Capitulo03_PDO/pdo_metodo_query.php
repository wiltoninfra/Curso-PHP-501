<?php
$insertA = <<<INSERTA
INSERT INTO funcionarios(
nome,email,senha
)
VALUES(
'Aline dos Santos','aline.santos@gmail.com','123456'
);
INSERTA;

$insertB = <<<INSERTB
INSERT INTO funcionarios(
nome,email,senha
)
VALUES(
'Larissa Souza','lari.souza@gmail.com','123456'
);
INSERTB;

$insertC = <<<INSERTC
INSERT INTO funcionarios(
nome,email,senha
)
VALUES(
'Patricia Costas Lima','pati.lima@gmail.com','123456'
);
INSERTC;

#Conexão com postgres
$dsn    = 'pgsql:host=localhost;dbname=capitulopdo';
$user   = 'dexter';
$pass   = '123456';

$conexaoPostgres = new PDO($dsn, $user, $pass);
$conexaoPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($conexaoPostgres->query($insertA)){
    echo 'Dados Salvos com Sucesso!<br>';
}else{
    echo 'Erro ao gravar!';
}

if($conexaoPostgres->query($insertB)){
    echo 'Dados Salvos com Sucesso!<br>';
}else{
    echo 'Erro ao gravar!';
}

if($conexaoPostgres->query($insertC)){
    echo 'Dados Salvos com Sucesso!<br>';
}else{
    echo 'Erro ao gravar!';
}

#------------------------------------ Inserindo no Mysql ----------------------
$dsn    = 'mysql:host=localhost;dbname=capitulopdo';
$user   = 'root';
$pass   = '123456';
$conexaoMysql = new PDO($dsn, $user, $pass);
$conexaoMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($conexaoMysql->query($insertA)){
    echo 'Dados Salvos com Sucesso!<br>';
}else{
    echo 'Erro ao gravar!';
}

if($conexaoMysql->query($insertB)){
    echo 'Dados Salvos com Sucesso!<br>';
}else{
    echo 'Erro ao gravar!';
}

if($conexaoMysql->query($insertC)){
    echo 'Dados Salvos com Sucesso!<br>';
}else{
    echo 'Erro ao gravar!';
}
