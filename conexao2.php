<?php
$servidor = "localhost";
$dbname = "ecoqr";
$dbuser = "root";
$dbsenha = "";
$conn = mysqli_connect($servidor, $dbuser, $dbsenha, $dbname);
if (!$conn) {
    die("Conexao falhou: " . mysqli_connect_error());
}
?>