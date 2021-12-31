<?php


$cod = $_POST['cod'];
$produto = $_POST['produto'];
$descricao = $_POST['comentarios'];
$lote = $_POST['lote'];
$medida = $_POST['medida'];
$perecivel = $_POST['perecivel'];
$valor = $_POST['valor'];
$data_fab = $_POST['fab'];
$data_val = $_POST['val'];
    


    $conn = mysqli_connect("localhost","root","","ecoqr") or print (mysqli_error());

    $query = "UPDATE produto SET nome='$produto', descricao='$descricao', lote='$lote', medida='$medida', perecivel='$perecivel',
    valor='$valor', fab='$data_fab', validade='$data_val'  WHERE cod=$cod";

    $executar= mysqli_query($conn, $query);

    if($executar == true){

        echo "<script>  alert('Produtop Atualizado com Sucesso');
        window.location.href='vizuprodut.php';
        </script>";
    
    }
    else{
    
        echo "<script>  alert('Falha na Edição');
        window.location.href='vizuprodut.php';
        </script>";
    } 


    ?>