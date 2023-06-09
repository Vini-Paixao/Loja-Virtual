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
<?php
// iniciando a sessão, pois precisamos pegar o cd do usuario logado para salvar na tabela de vendas no campo cd_cliiente
session_start();  
include 'conexao.php';
$data = date('Y-m-d');  // variavel que vai pegar a data do dia (ano mes dia -padrão do mysql)
$ticket = uniqid();  // gerando um ticket com função uniqid(); 	gera um id unico    
$cd_user = $_SESSION['ID'];  //recebendo o codigo do usuário logado, nesta pagina o usuario ja esta logado pois, em do carrinho de compra

//// criando um loop para sessão carrinho q recebe o $cd e a quantidade
foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
    $consulta = $cn->query("SELECT vl_produto FROM tbl_produtos WHERE id_produto='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    $preco = $exibe['vl_produto'];
	$inserir = $cn->query("INSERT INTO tbl_vendas(nm_ticket,id_cliente,id_produto,qtd_produto,vl_produto,data_venda) VALUES
	('$ticket','$cd_user','$cd','$qnt','$preco','$data')");
}
include 'fim.php';
?>