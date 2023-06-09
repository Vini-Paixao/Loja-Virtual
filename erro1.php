<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Emperium Street Wear - Erro</title>
    <meta name="Author" content="Marcus Vinicius">
    <link rel="icon" href="./Logos/Logotipo Escuro.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	
<?php
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
				<h2>Email já em uso na Loja!!!</h2>
				<a href="formusuario.php" class="btn btn-lg btn-warning" role="button">Tentar Novamente</a>
				<a href="esquecisenha.php" class="btn btn-link" role="button">Esqueci a senha</a>
			</div>
		</div>
	</div>
    <br>
	<?php include 'rodape.html' ?>
</body>
</html>