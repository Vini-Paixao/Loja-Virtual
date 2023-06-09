<?php
    $Servidor = '127.0.0.1:3306';
    $Usuario = 'admin';
    $Senha = 'Annarafa.2023';
    $BD = 'u464554601_bd_streetwear';
    $cn = new PDO("mysql:host=$Servidor; dbname=$BD", $Usuario, $Senha);
?>
