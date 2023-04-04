<?php
    $Servidor = 'localhost';
    $Usuario = 'emperium';
    $Senha = '123456';
    $BD = 'dt_LojaEmperium';
    $cn = new PDO("mysql:host=$Servidor; dbname=$BD", $Usuario, $Senha);
?>
