<?php
include 'conexao.php';
session_start();

$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];
$consulta = $cn -> query("select id_usuario, nm_usuario, desc_email, desc_senha, desc_status from tbl_usuario where desc_email = '$Vemail' and desc_senha = '$Vsenha'");

if($consulta -> rowCount() == 1){
    $exibeUsuario = $consulta -> fetch(PDO::FETCH_ASSOC);
    if($exibeUsuario['desc_status'] == 0){
        $_SESSION['ID'] = $exibeUsuario['id_usuario'];
        $_SESSION['Status'] = 0;
        header('location:index.php');
    }
    else{
        $_SESSION['ID'] = $exibeUsuario['id_usuario'];
        $_SESSION['Status'] = 1;
        header('location:index.php');
    }
}
else{
    header('location:erro.php');
}
?>