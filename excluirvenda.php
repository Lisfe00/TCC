<?php
    
    include("conexao2.php");

    $codigo = intval($_GET ['codigo']);

    $sql_code = "DELETE FROM venda WHERE cod = '$codigo'";
    $sql_query = $conn->query($sql_code) or die($conn->error);

    if($sql_query)
        echo "<script> 
        location.href='vizuvenda.php?p=inicial';
         </script>";
    else
        echo "<script> 
        alert('Não foi possível deletar o usuário.');
        location.href='vizuvenda.php?p=inicial';
         </script>"; 
                  
                                                     
?>