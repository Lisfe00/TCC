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

        <a class="sair" href="logout.php">sair </a>

        <a class="logout" href="login.php"><img src="css/img/logout.png" width="40" height="40" /></a>
        
      </nav>

</header>

  <main>

  <form class="form">
        <div class="card-group btn">
          <button formaction ='cadastro.php' class="btnimg"><img src="css/img/cadastroN.png" width="120" height="120" />FORNECEDOR</button>
        </div>

        <div class="card-group1 btn">
          <button formaction = 'cadcliente.php'class="btnimg1"><img src="css/img/cliente.png" width="120" height="120" />CLIENTE</button>
        </div>

        <div class="card-group2 btn">
          <button formaction = 'venda.php'class="btnimg2"><img src="css/img/venda1.png" width="120" height="120" />VENDA</button>
        </div>

        <div class="card-group4 btn">
          <button formaction = 'produto.php' class="btnimg4"><img src="css/img/org2.png" width="150" height="120" />PRODUTO</button>
        </div>
  </form>
</main>
    <script src="js/mobile-navbar.js"></script>

</body>
</html>