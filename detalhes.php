<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Emperium Street Wear - Detalhes</title>
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
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

	if(!empty($_GET['id'])){
		$idproduto = $_GET['id'];
		$consulta = $cn->query("select * from vw_produto where id_produto = '$idproduto'");
		$exibir = $consulta->fetch(PDO::FETCH_ASSOC);
	}else{
		header("location:index.php");
	}
	?>
    <div class="container-fluid">	
	<div class="row">		
		<div class="col-sm-4 col-sm-offset-1">			 
			<h1>Detalhes do Produto</h1>			 
			<img src="Produtos/<?php echo $exibir['ds_img'];?>" class="img-responsive" style="width:75%;">
		</div>
		<div class="col-sm-7">
			<h1><b><?php echo $exibir['nm_nome'];?></b></h1>
			<h2><b>Resumo: </b><?php echo $exibir['ds_resumo_produto'];?></h2>
			<h2><b>Marca: </b><?php echo $exibir['nm_marca'];?></h2>
			<h2><b>Drop: </b><?php echo $exibir['nm_artigo'];?></h2>
			<h2><b>Preço: </b>R$<?php echo number_format($exibir['vl_produto'],2,',','.');?></h2>
			<?php if($exibir['qtd_estoque'] > 0) { ?>
				<button class="btn btn-default btn-lg" style="background:#fdeb00; color:black; width:40%;">
					<span class="glyphicon glyphicon-usd"></span> Comprar
				</button>
			<?php } 
			else { ?>
				<button class="btn btn-danger btn-lg" style="width:40%;" disabled>
					<span class="glyphicon glyphicon-exclamation-sign"></span> Fora de Estoque
				</button>
			<?php } ?>
		</div>
	</div>
	<br>
	<?php include 'rodape.html' ?>
</body>
</html>