<?php
require_once 'auth.php';

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

// IF que encaminha pra home page caso ambos os campos não estejam vazios
if (!empty($username) && !empty($password)) {
  auth_login($username, $password);

  header('Location: home.php');
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Sistema de Login </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- <link rel="stylesheet" href="/styles/css/bulma.min.css" />  -->
  <link rel="stylesheet" type="text/css" href="/styles/css/login.css">

</head>

<body>
  <div class="main">
    <div class="container">
      <div class="contentContainer">
        <h3>Sistema de Login</h3>
        <form method="POST">
          <div class="field">
            <div class="control">
              <input name="username" type="text" class="input is-large" placeholder="Seu usuário" autofocus="">
            </div>
          </div>

          <div class="field">
            <div class="control">
              <input name="password" type="password" class="input is-large" placeholder="Sua senha">
            </div>
          </div>
          <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>