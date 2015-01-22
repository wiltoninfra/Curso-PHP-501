<html>
<head>
<title>Funcionários</title>
<meta charset="UTF-8">
</head>
<body>
    <?php
       

    ?>
	<form action="" method="POST" class="form-horizontal">
		<fieldset>

			<!-- Form Name -->
			<legend>Inserir Funcionário</legend>

			<div class="control-group">
				<label class="control-label">Nome:</label>
				<div class="controls">
					<input name="nome" value="<?=$dados->getNome()?>" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">E-mail:</label>
				<div class="controls">
					<input name="email" value="<?=$dados->getEmail()?>" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Senha:</label>
				<div class="controls">
					<input name="senha" value="<?=$dados->getSenha()?>" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<button class="btn btn-primary">Salvar</button>
				</div>
			</div>

		</fieldset>
		<input type="text" name="id" value="<?=$dados->getId()?>" >
	</form>
</body>
</html>