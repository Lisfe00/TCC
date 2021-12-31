<?php

include("conexao.php");

if(isset($_POST['email']) && strlen($_POST['email']) > 0){

  if(!isset($_SESSION))
    session_start();

  $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
  $_SESSION['senha'] = md5(($_POST['senha']));

  $sql_code = "SELECT senha, email, cod FROM login WHERE email = '$_SESSION[email]'";
  $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
  $dado = $sql_query->fetch_assoc();
  $total = $sql_query->num_rows;

  if($total == 0){
      $erro[] = "Este email não pertence à nenhum usuário.";
  }else{
      if($dado['senha'] == $_SESSION['senha']){
        
          $_SESSION['usuario'] = $dado['cod'];
      }else{

          $erro[] = "Senha incorreta.";
      }
  }
  if(count(array($erro)) == 0 || !isset($erro)){
      echo "<script>alert('Login efetuado com sucesso'); location.href='cadastromenu.php';</script>";
  }

}

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
  <form method="POST" action="" class="form">
    <div class="cardl">
      <div class="card-top">
        <img class="imglogin" src="css/img/user.png" alt="Imagem não carregada!">
        <h2 class="title">EcoQR</h2>
      </div>

      <div class="card-group">
        <label>Email</label>
        <input value="" type="email" name="email" placeholder="Digite seu email" required>
      </div>

      <div class="card-group">
        <label>Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
      </div>
      <br/>
      <div class="card-group btn">
        <button type="submit">ENTRAR</button>
      </div>

        <!--<div class="card-group btn">
          <button onclick="window.location.href = 'cadastro.html'">CADASTRE-SE</button>
          <button type="button">CADASTRE-SE</button> -->
        </div>
      </div>
    </div>
  </form>
 
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/jquery.mask.js"></script>

</body>
</html>