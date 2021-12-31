<?php
    $cod= $_POST['cod'];
    $nomef = $_POST['namef'];
    $cpf_cnpj = $_POST['CPF/CNPJf'];
    $emailf = $_POST['emailf'];
    $fone = $_POST['fonef'];
    $est = $_POST['estadof'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $comentariosf = $_POST['comentariosf'];



    $conn = mysqli_connect("localhost","root","","ecoqr") or print (mysqli_error());

    $query = "UPDATE fornecedores SET nome='$nomef', cpf_cnpj='$cpf_cnpj', email='$emailf', fone='$fone', estado='$est',
    cidade='$cidade', bairro='$bairro', rua='$rua', numero='$numero', cep='$cep', obs='$comentariosf'  WHERE cod=$cod";

    $executar= mysqli_query($conn, $query);

    if($executar == true){

        echo "<script>  alert('Usuario Atualizado com Sucesso');
        window.location.href='vizuforn.php';
        </script>";
    
    }
    else{
    
        echo "<script>  alert('Falha na Edição');
        window.location.href='vizuforn.php';
        </script>";
    } 


    ?>
