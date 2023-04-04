<?php
    $Servidor = 'https://sh-pro58.hostgator.com.br:2083/cpsess8159630461/3rdparty/phpMyAdmin/db_structure.php?server=1&db=hotecc21_loja-virtual';
    $Usuario = 'hotecc21';
    $Senha = '92m0WruV6e';
    $BD = 'hotecc21_loja-virtual';
    $cn = new PDO("mysql:host=$Servidor; dbname=$BD", $Usuario, $Senha);
?>
