<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Login Usuário</title>
    <meta name="Author" content="Marcus Vinicius">
    <link rel="icon" href="./Logos/Logotipo Escuro.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        session_start();
        include 'conexao.php';	
        include 'nav.php';
        include 'cabecalho.html';
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h2>Logon de Usuário</h2>
                <form name="frm_usuario" method="POST" action="validausuario.php">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="txtemail" type="email" class="form-control" required id="email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input name="txtsenha" type="password" class="form-control" required id="senha">
                    </div>
                    <button type="submit" class="btn btn-lg btn-default">
                        <span class="glyphicon glyphicon-ok"></span> Entrar
                    </button>
                    <a href="formusuario.php" style="text-decoration:none;">
                    <button type="button" class="btn btn-lg btn-link">
                        Ainda não sou cadastrado
                    </button>
                    </a>
                </form>
			</div>
		</div>
	</div>
    <br>
    <br>
	<?php include 'rodape.html' ?>
</body>
</html>