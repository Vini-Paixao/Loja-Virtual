<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Emperium Street Wear</title>
    <meta name="Author" content="Marcus Vinicius">
    <link rel="icon" href="./Logos/Logotipo Escuro.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="estilo.css">
    <script src="jquery.mask.js"></script>
    <script>
        $(document).ready(function(){
        $("#cep").mask("00 000-000");
        $("#celular").mask("(00) 00000-0000");
        });
    </script>
</head>
<body>
    <?php
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
    ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h2>Cadastro de novo Cliente</h2>
				<form method="post" action="inserirusuario.php" name="logon">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="txtnome" type="text" class="form-control" required id="nome">
                </div>
				<div class="form-group">
						<label for="sobrenome">Sobrenome</label>
						<input name="txtsobrenome" type="text" class="form-control" required id="sobrenome">
				</div>
				<div class="form-group">
						<label for="celular">Celular com DD</label>
                        <input name="txtcelular" type="tel" class="form-control" required id="celular" placeholder="(00) 00000-0000">
				</div>
				<div class="form-group">
						<label for="email">E-mail</label>
						<input name="txtemail" type="email" class="form-control" required id="email">
				</div>
				<div class="form-group">
						<label for="senha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha">
				</div>
				<div class="form-group">
						<label for="endereco">Endereço</label>
						<input name="txtendereco" type="text" class="form-control" required id="endereco"></input>
				</div>
				<div class="form-group">
						<label for="cidade">Cidade</label>
						<input name="txtcidade" type="text" class="form-control" required id="cidade">
				</div>
				<div class="form-group">
						<label for="cep">CEP</label>
						<input name="txtcep" type="text" class="form-control" required id="cep" placeholder="00 00-000">
				</div>
				<button type="submit" class="btn btn-lg btn-default">
					<span class="glyphicon glyphicon-floppy-open"></span> Cadastrar
				</button>
				</form>
                <br>		
			</div>
		</div>
	</div>
	<?php include 'rodape.html' ?>
</body>
</html>