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
              
            $funcionarios->setDados($registro, $_POST);
            
            if($registro->salvar()){
                header('location:index.php');
            }
        }

    ?>
	<form action="" method="POST" class="form-horizontal">
	    <input type = "hidden" value = "<?=$registro->getId()?>" name = "id">
		<fieldset>

			<!-- Form Name -->
			<legend>Inserir Funcionário</legend>

			<div class="control-group">
				<label class="control-label">Nome:</label>
				<div class="controls">
					<input name="nome" value="<?=$registro->getNome() ?>" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">E-mail:</label>
				<div class="controls">
					<input name="email" value="<?=$registro->getEmail() ?>" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Senha:</label>
				<div class="controls">
					<input name="senha" value="" class="input-xlarge" type="password">
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