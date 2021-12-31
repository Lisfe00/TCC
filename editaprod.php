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


    <?php
  

    if (!empty($_POST["dataForUpdating"])){
      $order_id = $_POST['dataForUpdating'];
     
      $conexao = mysqli_connect("localhost","root","","ecoqr");
      $query2 = "SELECT nome, descricao, lote, medida, perecivel, valor, fab, validade, cod  FROM produto WHERE cod=$order_id";
      $resultado = mysqli_query($conexao,$query2);
  
      $dado = mysqli_fetch_array($resultado);
  ?>
 
  <?php
  }
  ?>

  <form class="form2" method="POST" action="salvarprod.php">
    <div class="card">

      <div class="card-top">
        <img class="imglogin" src="css/img/org2.png" alt="Imagem não carregada!">
        <h1 class="titulo1">Produto</h2>
      </div>

      <div class="card-group">
        <label>Produto</label>
        <input type="text" name="produto" value="<?php echo $dado['nome']; ?>" required>
      </div>

      <div class="card-group">
        <label>Descrição</label>
        <input type="text" name="comentarios" value="<?php echo $dado['descricao']; ?>" required>
      </div>
        <div class="card-group">
          <label>Lote</label>
          <input type="text" name="lote" value="<?php echo $dado['lote']; ?>" required>
       </div>
       
        <label>Medida</label>
        
        <div class="card-group">
        <select name="medida" class="selecao" style="width:336px" value="<?php echo $dado['medida']; ?>" required>
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
          <input type="text" name="valor" id="valor" value="<?php echo $dado['valor']; ?>" required>
        </div>

        <div class="card-group">
          <label>Data de Fabricação</label>
          <input type="date" name="fab" id="fab" value="<?php echo $dado['fab']; ?>" required>
        </div>

        <div class="card-group">
          <label>Data de Validade</label>
          <input type="date" name="val" id="val" value="<?php echo $dado['validade']; ?>" required>
        </div>







        <div class="card-group btn lul">
          <button type="submit">EDITAR</button>
        </div>

        <div class="card-group btn lul">
          <button><a style="color: white;" href="vizuprodut.php">VOLTAR</a></button>
        </div>

        <input type = "hidden" id="inputHidden" name="cod" value=<?php echo $dado['cod']; ?> >

      </div>
    </div>
  </form>


</body>
</html>