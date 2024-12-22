<?php

// variaveis de conexão
$host = 'localhost';
$db = 'urbano';
$user = 'root';
$password = '';
$port = 3307; // 3306

$con = mysqli_connect( $host, $user, $password, $db, $port );




if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
