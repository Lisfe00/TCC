<?php

$cod= $_POST['cod'];
$nome = $_POST['nome'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$obs = $_POST['obs'];
$data_cadastro = $_POST['data_cadastro'];
$fone = $_POST['fone'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$responsavel = $_POST['responsavel'];


    $conn = mysqli_connect("localhost","root","","ecoqr") or print (mysqli_error());

    $query = "UPDATE cliente SET nome='$nome', cpf_cnpj='$cpf_cnpj', email='$email', estado='$estado', obs='$obs',
    data_cadastro='$data_cadastro', fone='$fone', rua='$rua', numero='$numero', bairro='$bairro', cidade='$cidade', 
    cep='$cep', responsavel='$responsavel'  WHERE cod=$cod";

    $executar= mysqli_query($conn, $query);

    if($executar == true){

        echo "<script>  alert('Cliente Atualizado com Sucesso');
        window.location.href='vizuclient.php';
        </script>";
    
    }
    else{
    
        echo "<script>  alert('Falha na Edição');
      
        </script>";
    } 


    ?>