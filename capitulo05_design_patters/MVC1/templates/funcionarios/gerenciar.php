<html>
<head>
    <title>Funcionários</title>
    <meta charset = "UTF-8">
</head>
<body>
<table align = "center">
    <tr>
        <th colspan="5">
            <a href="inserir.php"> + NOVO FUNCIONÁRIO</a>
        </th>
    </tr>
    <tr bgcolor="#9FB6CD">
        <th>#</th>
        <th>Nome</th>
        <th>E-Mail</th>
        <th>Senha</th>
        <th>Alterar</th>
        <th>Excluir</th>
    </tr>
    <?php 
        foreach ($dados as $funcionario):
    ?>
      <tr>
        <td><?= $funcionario->getId(); ?></td>
        <td><?= $funcionario->getNome(); ?></td>
        <td><?= $funcionario->getEmail(); ?></td>
        <td>******</td>
        <td><a href="alterar.php?id=<?= $funcionario->getId(); ?>">Alterar</a></td>
        <td><a href="excluir.php?id=<?= $funcionario->getId(); ?>">Excluir</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
