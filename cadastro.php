<?php
  include"conexao2.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
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

        <a class="qr" href="cadastromenu.php"> <img src="css/img/qrcode.png" width="40" height="40" /> </a>

        <a class="logo" href="cadastromenu.php"> EcoQR </a>

        <a class="sair" href="cadastromenu.php">voltar</a>
      </nav>

  </header>
  
  <form class="form" method="POST" action="processa_fornecedor.php">
    <div class="card">
      <div class="card-top">
        <img class="imgcadastro" src="css/img/cadastroN.png" alt="Imagem não carregada!">
        <h2 class="title">FORNECEDOR</h2>
      </div>

      <div class="card-group">
        <label>Nome Do Fornecedor</label>
        <input type="text" name="namef" placeholder="Digite o nome do Fornecedor" required>
      </div>

      <div class="card-group">
        <label>CPF/CNPJ</label>
        <input type="text" name="CPF/CNPJf" placeholder="Digite o CPF/CNPJ do fornecedor" required>
      </div>

      <div class="card-group">
        <label>Telefone</label>
        <input type="number" name="fonef" placeholder="Digite o telefone do fornecedor" required>
      </div>

      <div class="card-group">
        <label>Email</label>
        <input type="email" name="emailf" placeholder="Digite o Email do fornecedor" required>
      </div>
      
      <div class="card-group">
        <label>Estado</label>
        <select name="est" class="selecao" style="width:335px">
          <?php
            $sql="SELECT * FROM estados order by uf";
            $res=mysqli_query($conn,$sql);
            while($vcod=mysqli_fetch_row($res)) {
              $vuf=$vcod[0];
              $vsigla=$vcod[1];
              echo "<option value=$vuf>$vsigla</option>";
            }
          ?>
        </select>
      </div>

      <div class="card-group">
        <label>Cidade</label>
        <input type="text" name="cidade" placeholder="Digite a Cidade" required>
      </div>

      <div class="card-group">
        <label>Bairro</label>
        <input type="text" name="bairro" placeholder="Digite o Bairro" required>
      </div>

      <div class="card-group">
        <label>Rua</label>
        <input type="text" name="rua" placeholder="Digite a Rua" required>
      </div>

      <div class="card-group">
        <label>Número</label>
        <input type="number" name="numero" placeholder="Digite o Número do local" required>
      </div>

      <div class="card-group">
        <label>CEP</label>
        <input type="number" name="cep" placeholder="Digite o CEP" required>
      </div>

      <div class="card-group">
        <label>Observação</label>
        <textarea name="comentariosf" rows="3" cols="42" placeholder="Digite a descrição do Fornecedor"></textarea>
      </div>

        <div class="card-group btn lul">
          <button type="submit">CADASTRAR</button>
        </div>

      <footer>Contato: ecoqr@gmail.com &bull; 2021 &copy;</footer>
    </div>
  </form>

  <script src="js/mobile-navbar.js"></script>
 
</body>
</html>