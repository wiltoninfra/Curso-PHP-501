<?php
$dsn = 'pgsql:host=localhost;dbname=capitulopdo';
$user = 'dexter';
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = <<<INSERTA
INSERT INTO funcionarios(
nome,email,senha
)
VALUES(
'Ana Paula de Almeida','paula.ana@gmail.com','123456'
);
INSERTA;

try {
    $conexao->beginTransaction();
    for ($x = 0; $x <= 4; $x ++) {
        if ($x == 4) {
            $insert = "INSERT SDFSDFS;";
        }
        
        if ($conexao->query($insert)) {
            echo "$x - Dados Salvos!<br>";
        }
    }
    $conexao->commit();
} catch (PDOException $erro) {
    echo 'Erro: ' . $erro->getMessage();
    $conexao->rollBack();
}      

