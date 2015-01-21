<html>
<head>
<title>Funcionários</title>
<meta charset="UTF-8">
</head>
<body>
    <?php
        include 'classes/includes.php';
        $funcionarios = new Funcionarios();
        
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        
        if($id){
            $registro = $funcionarios->buscarPorId($id);        
        }
        
        if ($_POST) {
            if($funcionarios->alterarFuncionario($_POST, $id)){
                header('location:index.php');
            }
        }

    ?>
	<form action="" method="POST" class="form-horizontal">
		<fieldset>

			<!-- Form Name -->
			<legend>Inserir Funcionário</legend>

			<div class="control-group">
				<label class="control-label">Nome:</label>
				<div class="controls">
					<input name="nome" value="<?=$registro['nome']?>" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">E-mail:</label>
				<div class="controls">
					<input name="email" value="<?=$registro['email']?>" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Senha:</label>
				<div class="controls">
					<input name="senha" value="<?=$registro['senha']?>" class="input-xlarge" type="password">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<button class="btn btn-primary">Salvar</button>
				</div>
			</div>

		</fieldset>
	</form>
</body>
</html>