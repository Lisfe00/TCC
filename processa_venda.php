<?php include_once"conexao2.php";?>
<html>
<body>
<?php 

$cliente = $_POST['cvenda'];
$produto = $_POST['produto'];
$fornecedor = $_POST['fvenda'];
$data_venda = $_POST['datav'];
$quantidade = $_POST['quantidade'];
$medida = $_POST['medida'];


$conn = mysqli_connect($servidor,$dbuser,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO venda(cliente, produto, fornecedor, data_venda, quantidade, medida) VALUES('$cliente', '$produto', '$fornecedor', '$data_venda', '$quantidade', '$medida')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados!'); window.location = 'venda.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>