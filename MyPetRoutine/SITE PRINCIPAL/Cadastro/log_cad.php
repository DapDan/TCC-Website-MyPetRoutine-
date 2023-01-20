<?php
  if(isset($_POST['submit_cd']))
  {
    /*
    header('Location: index.php');
    print_r($_POST['nome']);
    print_r($_POST['email']);
    print_r($_POST['senha']);
    print_r($_POST['confi_senha']); 
    */
    
    include_once('config.php');
    $nome = $_POST['nome_cd'];
    $email = $_POST['email_cd'];
    $password = $_POST['senha_cd'];
    $confi_senha = $_POST['confi_senha_cd'];

    $result = mysqli_query($conn, "INSERT INTO usuarios(nome, email, senha, confi_senha) VALUES ('$nome', '$email', '$senha', '$confi_senha')");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="log_cad.css">

  <title>Entrar</title>
</head>

<body>
  <div class="cont">
    <form class="form_lg" action="testeLogin.php" method="POST">
      <div class="form sign-in">
        <h2>Entrar</h2>
        <label>
          <span>Endereço de Email</span>
          <input type="email" name="email_lg" id="email_lg">
        </label>
        <label>
          <span>Senha</span>
          <input type="password" name="password_lg" id="password_lg">
        </label>
        <button name="submit_lg" type="submit" class="submit" id="submit_lg">Entrar</button>
        <p class="forgot-pass">Esqueceu a senha?</p>

        <div class="social-media">
          <ul>
            <li><img src="../images/facebook.png" style="height: 40px; width: 40px"></li>
            <li><img src="../images/twitter.png" style="height: 40px; width: 40px"></li>
            <li><img src="../images/linkedin.png" style="height: 40px; width: 40px"></li>
            <li><img src="../images/instagram.png" style="height: 40px; width: 40px"></li>
            <!--<li><img src="images/instagram.png"></li>-->
          </ul>
        </div>
      </div>
    </form>

    <form action="log_cad.php" method="POST">
      <div class="sub-cont">
        <div class="img">
          <div class="img-text m-up">
            <h2>Novo por aqui?</h2>
            <p>Cadastre-se e descubra um mundo completamente novo!</p>
          </div>
          <div class="img-text m-in">
            <h2>Já é um membro?</h2>
            <p>Dê um login!</p>
          </div>
          <div class="img-btn">
            <span class="m-up">Cadastrar</span>
            <span class="m-in">Login</span>
          </div>
        </div>
        <div class="form sign-up">
          <h2>Cadastrar</h2>
          <label>
            <span>Nome</span>
            <input name="nome_cd" type="text" id="nome_cd" required>
          </label>
          <label>
            <span>Email</span>
            <input name="email_cd" type="email" id="email_cd" required>
          </label>
          <label>
            <span>Senha</span>
            <input name="senha_cd" type="password" id="senha_cd" required>
          </label>
          <label>
            <span>Confirmar senha</span>
            <input name="confi_senha_cd" type="password" id="confi_senha_cd" required>
          </label>
          <button name= "submit_cd" type="submit" class="submit">Cadastrar-se</button>
        </div>
      </div>
    </form>
  </div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>