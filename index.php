<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Rafael Batista">
  <link rel="icon" href="imagens/favicon.ico">

  <title>Login</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="css/signin.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body>

  <div class="container">

    <form class="form-signin" method="POST" action="valida.php">
      <h1 class="form-signin-heading">Super4U</h1>
      <h2 class="form-signin-heading">Sistema de Gerenciamento de Estoque</h2>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
    </form>
    <p class="text-center text-danger">
      <?php if (isset($_SESSION['loginErro'])) {
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
      } ?>
    </p>
    <p class="text-center text-success">
      <?php
      if (isset($_SESSION['logindeslogado'])) {
        echo $_SESSION['logindeslogado'];
        unset($_SESSION['logindeslogado']);
      }
      ?>
    </p>
  </div> <!-- /container -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>