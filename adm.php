<!DOCTYPE html>
<html lang="pt-BR">
<head>
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
</head>
<body>	
<?php
	session_start();

    if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
        header('location:index.php');
    }
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
				<h1 style="font-size:2.3vw; color: #000; text-shadow: 1px 1px 0px #fdeb00; letter-spacing: 5px;">ÁREA ADMINISTRATIVA</h1>
                <br>
				<a href="formProduto.php" style="text-decoration:none;">			
				<button type="submit" class="btn btn-block btn-lg btn-primary"> Incluir Produto</button>
				</a>
                <br>
                <a href="lista.php" style="text-decoration:none;">
				<button type="submit" class="btn btn-block btn-lg btn-warning">	Alterar / Excluir Produto</button>
                </a>
                <br>
				<button type="submit" class="btn btn-block btn-lg btn-success"> Vendas</button>
                <br>
                <a href="sair.php" style="text-decoration:none;">
				<button type="submit" class="btn btn-block btn-lg btn-danger"> Sair da àrea administrativa</button>
                </a>
			</div>
		</div>
	</div>
    <br>
    <br>
	<?php include 'rodape.html' ?>
</body>
</html>