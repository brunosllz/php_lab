<?php
// Variaveis para conexao com o banco.
$hostname = "localhost";
$username = "suporte";
$password = "qwe123!";
$database = "php_lab";
$port = "3306";

try{
    $connection = mysqli_connect(
        $hostname,
        $username,
        $password,
        $database,
        $port
    );
}catch(Exception $err) {
    echo  "code: {$err->getCode()} <br /> message:  {$err->getMessage()}";
}

// var_dump($connection);
// echo "Conexao realizada.";
