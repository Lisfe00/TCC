<?php include_once"conexao2.php";?>
<html>
<body>
<?php 

$nome = $_POST['namef'];
$cpfcnpj = $_POST['CPF/CNPJf'];
$telefone = $_POST['fonef'];
$email = $_POST['emailf'];
$estadof = $_POST['est'];
$cidadef = $_POST['cidade'];
$bairrof = $_POST['bairro'];
$ruaf = $_POST['rua'];
$numerof = $_POST['numero'];
$cepf = $_POST['cep'];
$obs = $_POST['comentariosf'];

$conn = mysqli_connect($servidor,$dbuser,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO fornecedores(nome, cpf_cnpj, fone, email, estado, cidade, bairro, rua, numero, cep, obs, data_cadastro) VALUES('$nome', '$cpfcnpj', '$telefone', '$email', '$estadof', '$cidadef', '$bairrof', '$ruaf', '$numerof', '$cepf', '$obs', NOW())";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'cadastro.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>