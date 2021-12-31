<?php include_once"conexao2.php";?>
<html>
<body>
<?php 

$nome = $_POST['namec'];
$cpfcnpj = $_POST['CPF/CNPJ'];
$telefone = $_POST['fone'];
$email = $_POST['email'];
$responsavel = $_POST['responsavel'];
$estado = $_POST['est'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$obs = $_POST['comentarios'];
$data_cadastro = $_POST['data_cadastro']; 

$conn = mysqli_connect($servidor,$dbuser,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO cliente (nome, cpf_cnpj, fone, email, responsavel, estado, cidade, bairro, rua, numero, cep, obs, data_cadastro) VALUES('$nome', '$cpfcnpj', '$telefone', '$email', '$responsavel', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$cep', '$obs', '$data_cadastro')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'cadcliente.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>