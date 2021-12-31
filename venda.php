<?php
  include"conexao2.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylevenda.css">
    <title>Venda</title>
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

  <form class="form" method="POST" action="processa_venda.php">
    <div class="card">

      <div class="card-top">
        <img class="imgcadastro" src="css/img/venda1.png" alt="Imagem não carregada!">
        <h1 class="titulo1">Venda</h2>
      </div>
        <form>
          <label>Produto</label>
          <select name="produto" class="selecao" style="width:353px">
          <?php
            $sql="SELECT * FROM produto";
            $res=mysqli_query($conn,$sql);
            while($vcod=mysqli_fetch_row($res)) {
              $vcodpr=$vcod[0];
              $vprd=$vcod[1];
              echo "<option value=$vcodpr>$vprd</option>";
            }
          ?>
        </select>
        </form>

        &nbsp;

        <form>
          <label>Fornecedor</label>
          <select name="fvenda" class="selecao" style="width:353px">
          <?php
            $sql="SELECT * FROM fornecedores";
            $res=mysqli_query($conn,$sql);
            while($vcod=mysqli_fetch_row($res)) {
              $vcodf=$vcod[0];
              $vforn=$vcod[1];
              echo "<option value=$vcodf>$vforn</option>";
            }
          ?>
        </select>
        </form>

        &nbsp;

        <form>
          <label>Cliente</label>
          <select name="cvenda" class="selecao" style="width:353px">
          <?php
            $sql="SELECT * FROM cliente";
            $res=mysqli_query($conn,$sql);
            while($vcod=mysqli_fetch_row($res)) {
              $vcodc=$vcod[0];
              $vclie=$vcod[1];
              echo "<option value=$vcodc>$vclie</option>";
            }
          ?>
        </select>
        </form>

        &nbsp;

        <div class="card-group">
        <label>Quantidade</label>
          <input type="number" name="quantidade" id="quantidade" placeholder="Digite a quantidade do produto">
        </div>

        &nbsp;

        <form>
          <label>Medida</label>
          <select name="medida" class="selecao" style="width:353px">
            <option value="0">Selecione</option>
            <option value="Kg">Kg</option>
            <option value="g">g</option>
            <option value="Molho">Molho</option>
            <option value="Unidade">Unidade</option>
        </select>
        </form> 

        &nbsp;

        <div class="card-group">
          <label>Data da Venda</label>
          <input type="date" name="datav" id="val">
        </div>

        <div class="card-group btn">
          <button type="submit">CADASTRAR</button>
        </div>

      </div>
    </div>
  </form>

  <script src="js/mobile-navbar.js"></script>

 <!-- <form class="form2">
    <div class="card2">
    <a calss="logout" href="logout.php">Logout</a>
      <footer>Contato: ecoqr@gmail.com &bull; 2021 &copy;</footer>
    </div>
  </form> -->
 
  </body>
</html>