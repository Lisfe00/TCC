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

  <?php
  

    if (!empty($_POST["dataForUpdating"])){
      $order_id = $_POST['dataForUpdating'];
     
      $conexao = mysqli_connect("localhost","root","","ecoqr");
      $query2 = "SELECT cliente, produto, fornecedor, data_venda, quantidade, medida, cod  FROM venda WHERE cod=$order_id";
      $resultado = mysqli_query($conexao,$query2);
  
      $dado = mysqli_fetch_array($resultado);
  ?>
 
  <?php
  }
  ?>

  <form class="form" method="POST" action="processa_venda.php">
    <div class="card">

      <div class="card-top">
        <img class="imgcadastro" src="css/img/venda1.png" alt="Imagem não carregada!">
        <h1 class="titulo1">Venda</h2>
      </div>
        <form>
          <label>Produto</label>
          <div class="card-group">
        <label>Quantidade</label>
          <input type="number" name="quantidade" id="quantidade" placeholder="Digite a quantidade do produto">
        </div>
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
                <div class="card-group btn">
                  <button onclick="reset">LIMPAR</button>
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