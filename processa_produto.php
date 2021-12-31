<?php include_once"conexao2.php";?>
<html>
<body>
<?php 

$produto = $_POST['produto'];
$descricao = $_POST['comentarios'];
$lote = $_POST['lote'];
$medida = $_POST['medida'];
$perecivel = $_POST['perecivel'];
$valor = $_POST['valor'];
$data_fab = $_POST['fab'];
$data_val = $_POST['val'];

$conn = mysqli_connect($servidor,$dbuser,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO produto (nome, descricao, lote, medida, perecivel, valor, fab, validade) VALUES('$produto', '$descricao', '$lote', '$medida', '$perecivel', '$valor', '$data_fab', '$data_val')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'produto.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>