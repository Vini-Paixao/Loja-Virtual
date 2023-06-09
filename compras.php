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
    if(empty($_SESSION['ID'])) {
        header('location:formlogin.php');
    }
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
    $idUsu = $_SESSION['ID'];
    $consultaVenda = $cn ->query("select * from vw_venda where id_cliente = '$idUsu' group by nm_ticket");
	?>
    
    <div class="container-fluid">

        <div class="row text-center" style="margin-top: 15px;">
        <h1 style="font-size:2.3vw; color: #000; text-shadow: 1px 1px 0px #fdeb00; letter-spacing: 5px;">MINHAS COMPRAS</h1>
        </div>
        <div class="row text-center" style="margin-top: 15px;">
            <div class="col-sm-3 col-sm-offset-2"><h1><b> Data </b></h1></div>
            <div class="col-sm-3 col-sm-offset-2"><h1><b> Ticket </b></h1></div>
        </div>		

        <?php while($exibeVenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="row text-center" style="margin-top: 15px;">
                <div class="col-sm-3 col-sm-offset-2" ><h4> <?php echo date('d/m/Y', strtotime($exibeVenda['data_venda'])) ?></h4></div>
                <div class="col-sm-2">
                    <a href="ticket.php?ticket=<?php echo $exibeVenda['nm_ticket'] ?>">
                    <button class="btn btn-lg btn-primary"> Ver os produtos</button>
                    </a>
                </div>
                <div class="col-sm-3"><h4><?php echo $exibeVenda['nm_ticket'] ?></h4></div>
            </div>
        <br>
        <?php } ?>
    </div>

	<?php
	include 'rodape.html';
	?>
</body>
</html>