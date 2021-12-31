<?php
  include"conexao2.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style2.css">
  <title>Cadastro de Produto</title>
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

  <form class="form" method="POST" action="processa_produto.php">
    <div class="card">

      <div class="card-top">
        <img class="imglogin" src="css/img/org2.png" alt="Imagem não carregada!">
        <h1 class="titulo1">Produto</h2>
      </div>

      <div class="card-group">
        <label>Produto</label>
        <input type="text" name="produto" placeholder="Digite o nome do produto">
      </div>

      <div class="card-group">
        <label>Descrição</label>
        <textarea name="comentarios" rows="3" cols="42" placeholder="Digite a descrição do produto"></textarea>
      </div>
        <div class="card-group">
          <label>Lote</label>
          <input type="text" name="lote" placeholder="Digite o lote do produto">
       </div>
       
        <label>Medida</label>
        
        <div class="card-group">
        <select name="medida" class="selecao" style="width:336px">
            <option value="0">Selecione</option>
            <option value="Kg">Kg</option>
            <option value="g">g</option>
            <option value="Molho">Molho</option>
            <option value="Unidade">Unidade</option>
        </select>
        </div>
      
        <br/>
        <label>Perecível</label>
        <fieldset class="borda" style="width: 336px;">
        <div class="card-group">
          <p> &nbsp; &nbsp;
            <input type="radio" name="perecivel" value="Sim">Sim &nbsp; &nbsp;
            <input type="radio" name="perecivel" value="Não">Não
          </p>
      </div>
       </fieldset>
       <br/>
        <div class="card-group">
          <label>Valor</label>
          <input type="text" name="valor" id="valor" placeholder="Digite o valor do produto">
        </div>

        <div class="card-group">
          <label>Data de Fabricação</label>
          <input type="date" name="fab" id="fab">
        </div>

        <div class="card-group">
          <label>Data de Validade</label>
          <input type="date" name="val" id="val">
        </div>







        <div class="card-group btn">
          <button type="submit">CADASTRAR</button>
        </div>

      </div>
    </div>
  </form>

<!--  <form class="form2">
    <div class="card2">
      <footer>Contato: ecoqr@gmail.com &bull; 2021 &copy;</footer>
    </div>
  </form> -->

  <script src="js/mobile-navbar.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
 <!-- <script src="js/jquery.mask.js"></script>
  <script>
    $(document).ready(function() {
      $('#valor').mask('000.000.000.000.000,00', {reverse: true});
      /*$('.money2').mask("#.##0,00", {reverse: true});*/
    });
  </script>-->

</body>
</html>