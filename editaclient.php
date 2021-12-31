<?php
  include"conexao2.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylecliente.css">
  <title>EcoQR</title>
</head>
<body>

<?php
  

    if (!empty($_POST["dataForUpdating"])){
      $order_id = $_POST['dataForUpdating'];
     
      $conexao = mysqli_connect("localhost","root","","ecoqr");
      $query2 = "SELECT nome, cpf_cnpj, fone, email, estado, responsavel, data_cadastro, 
      obs, rua, numero, bairro, cidade, cep, cod  FROM cliente WHERE cod=$order_id";
      $resultado = mysqli_query($conexao,$query2);
  
      $dado = mysqli_fetch_array($resultado);
  ?>
 
  <?php
  }
  ?>

  <form class="form2" method="POST" action="salvarclient.php">
    <div class="card">
      <div class="card-top">
        <img class="imgcadastro" src="css/img/cliente.png" alt="Imagem não carregada!">
        <h2 class="title">Cliente</h2>
      </div>

      <div class="card-group">
        <label>Nome do Cliente/Supermercado</label>
        <input type="text" name="nome" value="<?php echo $dado['nome']; ?>" required>
      </div>

      <div class="card-group">
        <label>CPF/CNPJ</label>
        <input type="int" name="cpf_cnpj" value="<?php echo $dado['cpf_cnpj']; ?>" required>
      </div>

      <div class="card-group">
        <label>Telefone</label>
        <input type="tel" name="fone" value="<?php echo $dado['fone']; ?>" required>
      </div>

      <div class="card-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $dado['email']; ?>" required>
      </div>

      <div class="card-group">
        <label>Responsável</label>
        <input type="text" name="responsavel" value="<?php echo $dado['responsavel']; ?>" required>
      </div>

      <div class="card-group">
        <label>Estado</label>
        <input type="text" name="estado" value="<?php echo $dado['estado']; ?>" required>
      </div>

      <div class="card-group">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php echo $dado['cidade']; ?>" required>
      </div>
   
      <div class="card-group">
        <label>Bairro</label>
        <input type="text" name="bairro" value="<?php echo $dado['bairro']; ?>" required>
      </div>

      <div class="card-group">
        <label>Rua</label>
        <input type="text" name="rua" value="<?php echo $dado['rua']; ?>" required>
      </div>

      <div class="card-group">
        <label>Número</label>
        <input type="number" name="numero" value="<?php echo $dado['numero']; ?>" required>
      </div>

      <div class="card-group">
        <label>CEP</label>
        <input type="number" name="cep" value="<?php echo $dado['cep']; ?>" required>
      </div>

      <div class="card-group">
        <label>Data da cadastro</label>
        <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo $dado['data_cadastro']; ?>" required>
      </div>
      
      <div class="card-group">
        <label>Observação</label>
        <input type="text" name="obs" value="<?php echo $dado['obs']; ?>" required>
      </div>
    
      <div class="card-group btn lul">
          <button type="submit">EDITAR</button>
        </div>

        <div class="card-group btn lul">
          <button><a style="color: white;" href="vizuclient.php">VOLTAR</a></button>
        </div>

        <input type = "hidden" id="inputHidden" name="cod" value=<?php echo $dado['cod']; ?> >

      
    </div>
  </form>
 
  <script src="js/mobile-navbar.js"></script>

</body>
</html>