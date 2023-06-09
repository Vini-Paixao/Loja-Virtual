<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    // se a sessão id estiver vazia ou se a sessão estatus for diferente de adm entao execute
	if(empty($_SESSION['ID'])){
			header('location:index.php');  // redireciona para página index.php
	}
	$cd = $_SESSION['ID'];
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	$consulta = $cn->query("SELECT * FROM tbl_usuario WHERE id_usuario ='$cd'");	
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h2 style="font-size:2.3vw; color: #000; text-shadow: 1px 1px 0px #fdeb00; letter-spacing: 5px; text-align:center;">ALTERAÇÃO DE USUARIO</h2>
				<form method="post" action="alterarUsuario.php?id_altera=<?php echo $cd; ?>" name="alteraUsu" enctype="multipart/form-data">
					<div class="form-group">
						<label for="txtnome">Nome</label>
						<input type="text" name="txtnome" value="<?php echo $exibe['nm_usuario']; ?>"  class="form-control" required id="txtnome">
					</div>
					<div class="form-group">
                        <label for="txtsobrenome">Sobrenome</label>
                        <input type="text" class="form-control" value="<?php echo $exibe['sbnm_usuario']; ?>" name="txtsobrenome" required id="txtsobrenome">
					</div>
					<div class="form-group">
                        <label for="txtcell">Celular</label>
                        <input type="tell" class="form-control" value="<?php echo $exibe['cell_usuario']; ?>" name="txtcell" required id="txtcell">
					</div>
					<div class="form-group">
                        <label for="txtemail">Email</label>
                        <input type="email" class="form-control" required name="txtemail" value="<?php echo $exibe['desc_email']; ?>" required id="txtemail">
					</div>
					<div class="form-group">
                        <label for="txtsenha">Senha</label>
                        <input type="senha" class="form-control" name="txtsenha" value="<?php echo $exibe['desc_senha']; ?>" required id="txtsenha">
					</div>
					<div class="form-group">
                        <label for="txtendereco">Endereço</label>
                        <input type="text" class="form-control" name="txtendereco" value="<?php echo $exibe['desc_endereco']; ?>" required id="txtendereco">
					</div>
					<div class="form-group">
                        <label for="txtcidade">Cidade</label>
                        <input type="text" class="form-control" name="txtcidade" value="<?php echo $exibe['desc_cidade']; ?>" required id="txtcidade">
					</div>
					<div class="form-group">
                        <label for="txtcep">CEP</label>
                        <input type="text" class="form-control" name="txtcep" value="<?php echo $exibe['num_cep']; ?>" required id="txtcep">
					</div>
					<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Alterar
				    </button>
				</form>
			</div>
		</div>
        <br>
	</div>
	<?php include 'rodape.html' ?>
</body>
</html>