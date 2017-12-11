<?php
$mysqli = new mysqli("localhost","root","","tabelabd");

mysqli_set_charset($mysqli, 'utf8');

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.")" .$mysqli->connect_error;
?>