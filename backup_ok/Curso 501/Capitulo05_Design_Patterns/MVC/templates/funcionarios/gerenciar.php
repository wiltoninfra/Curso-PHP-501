<html>
<head>
    <title>Funcionários</title>
    <meta charset = "UTF-8">
</head>
<body>
<table align = "center">
    
    <tr bgcolor="#9FB6CD">
        <th>#</th>
        <th>E-Mail</th>
        <th>Senha</th>
        <th>Alterar</th>
        <th>Excluir</th>
    </tr>
    <?php 
        foreach ($dados as $funcionario){
    ?>
      <tr>
        <td><?=$funcionario->getId(); ?></td>
        <td><?=$funcionario->getEmail(); ?></td>
        <td>******</td>
        <td><a href="alterar.php?id=<?= $funcionario->getId(); ?>">Alterar</a></td>
        <td><a href="excluir.php?id=<?= $funcionario->getId(); ?>">Excluir</a></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
