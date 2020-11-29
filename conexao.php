<?php
$server = "localhost";
$user=  "root";
$password= "root";
$database= "dandelion";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("Conexão Falhou:" . mysqli_connect_error());

}

?>