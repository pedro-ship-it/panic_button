<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "botaopanico";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Falha na conexão.')</script>");
}
?>