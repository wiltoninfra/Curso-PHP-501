<html>
<head>
<title>Funcionários</title>
<meta charset="UTF-8">
</head>
<body>
	<form action="" method="POST" class="form-horizontal">
		<fieldset>

			<!-- Form Name -->
			<legend>Inserir Funcionário</legend>

			<div class="control-group">
				<label class="control-label">Nome:</label>
				<div class="controls">
					<input name="nome" value="" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">E-mail:</label>
				<div class="controls">
					<input name="email" value="" class="input-xlarge" type="text">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Senha:</label>
				<div class="controls">
					<input name="senha" class="input-xlarge" type="password">
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
	 <?php
        /*if ($_POST) { 
            include 'classes/includes.php';
            $funcionarios = new Funcionarios();
            $funcionarios->setDados($_POST);
            
            if($funcionarios->salvar($_POST)){
                header('location:index.php');
            }
        }
        */


    ?>
</body>
</html>