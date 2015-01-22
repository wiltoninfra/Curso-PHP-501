<?php
$dsn    = 'pgsql:host=localhost;dbname=capitulopdo';
$user   = 'dexter';
$pass   = '123456';

$conexao = new PDO($dsn, $user, $pass);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM funcionarios';

$query      = $conexao->query($sql);
$registros  = $query->fetchAll(PDO::FETCH_ASSOC);

echo 'Listando todos os registros<br>';
foreach ($registros as $registro){
    echo 'Nome: ' . $registro['nome'] . '<br>';
    echo 'Email: ' . $registro['email'] . '<br>';
    echo 'Senha: ' . $registro['senha'] . '<br>';
    echo '<hr>';
}
echo '<hr>';

echo 'Listando apenas um registro<br>';
$sql = 'SELECT * FROM funcionarios where id=2';
$query      = $conexao->query($sql);
$registro  = $query->fetch(PDO::FETCH_OBJ);
echo 'Nome: ' . $registro->nome . '<br>';
echo 'Email: ' . $registro->email . '<br>';
echo 'Senha: ' . $registro->senha . '<br>';
echo '<hr>';