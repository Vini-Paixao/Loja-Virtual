<?php
include 'conexao.php';

$nome = $_POST['txtnome'];
$sobrenome = $_POST['txtsobrenome'];
$celular = $_POST['txtcelular'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha']; 
$endec = $_POST['txtendereco']; 
$cidade = $_POST['txtcidade']; 
$cep = $_POST['txtcep'];

$consulta = $cn -> query("select desc_email from tbl_usuario where desc_email='$email'");
$exibe = $consulta -> fetch(PDO::FETCH_ASSOC);

if($consulta -> rowCount() == 1){
    header('location:erro1.php');
}
else{
    $incluir  = $cn->query(" 
        insert into tbl_usuario(nm_usuario, sbnm_usuario, cell_usuario, desc_email, desc_senha, desc_status, desc_endereco, desc_cidade, num_cep) values('$nome','$sobrenome','$celular','$email','$senha','0', '$endec', '$cidade', '$cep')");
        header('location:ok.php');
    }
?>