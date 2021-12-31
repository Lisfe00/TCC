
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylecad.css">
  <title>EcoQR</title>
</head>

<body>
  <header>
    <nav>
    <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a onclick="window.location.href ='vizuforn.php' " href="#"><img src="css/img/cadastroN.png" width="20" height="20" /> Fornecedor</a></li>
          <li><a onclick="window.location.href ='vizuclient.php' " href="#"><img src="css/img/cliente.png" width="20" height="20" /> Cliente</a></li>
          <li><a onclick="window.location.href ='vizuprodut.php' " href="#"><img src="css/img/org2.png" width="20" height="20" /> Produto</a></li>
          <li><a onclick="window.location.href ='vizuvenda.php' " href="#"><img src="css/img/venda1.png" width="20" height="20" /> Venda</a></li>
        </ul>

        <a class="qr" href="login.php"> <img src="css/img/qrcode.png" width="40" height="40" /> </a>

        <a class="logo" href="login.php"> EcoQR </a>

        <a class="sair" href="cadastromenu.php">Voltar </a>

        <a class="logout" href="login.php"><img src="css/img/logout.png" width="40" height="40" /></a>
        
      </nav>

</header>

<script src="js/mobile-navbar.js"></script>

</body>
</html>

<?php
include("conexao2.php");

$consulta = "SELECT * FROM venda";
$con = $conn->query($consulta) or die($conn->error);
?>
<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
        <div class="roll">
        <table border="1" class="table">
            <tr>
                 <td>N° da Venda</td>
                 <td>Cliente</td>
                 <td>Produto</td>
                 <td>Fornecedor</td>
                 <td>Data de Venda</td>
                 <td>Quantidade</td>
                 <td>Medida</td>
                 <td>Ação</td>
                 
            </tr>
        </div>    
            <?php while($dado = $con->fetch_array()){ ?>
            <tr>
                 <td><?php echo $dado['cod']; ?></td>
                 <td><?php echo $dado["cliente"]; ?></td>
                 <td><?php echo $dado["produto"]; ?></td>
                 <td><?php echo $dado["fornecedor"]; ?></td>
                 <td><?php echo $dado["data_venda"]; ?></td>
                 <td><?php echo $dado["quantidade"]; ?></td>
                 <td><?php echo $dado["medida"]; ?></td>
                 <td><form class="botoes" method = "post" action="editaprod.php">
    <input type = "hidden" id="inputHidden" name="dataForUpdating" value=<?php echo $dado['cod']; ?> >
      <button type = "submit" class="btn btn-info btn-xs"><img class="editar" src="css/img/editar.png" alt="Imagem não carregada!"></button></form> 
                   
                 <button location.href='excluirprod.php?codigo=<?php echo $dado['cod']; ?>'"><img class="editar" src="css/img/excluir.png" alt="Imagem não carregada!"></button></td>
            </tr>  
            
            <?php } ?>
        </table>
    </body>
</html>