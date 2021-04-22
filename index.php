<?php
require_once 'auth.php';

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

// IF que encaminha pra home page caso ambos os campos não estejam vazios
if (!empty($username) && !empty($password)) {
  auth_login($username, $password);

  header('Location: homepage.php');
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- <link rel="stylesheet" href="/styles/css/bulma.min.css" />  -->
  <link rel="stylesheet" type="text/css" href="/styles/css/login.css">

</head>

<body>
  <div class="main">
    <div class="container">
      <img src="/assets/logo.png" alt="logo" class="logo" />
      <div class="loginContainer">
        <div class="loginContentContainer">

          <div class="formSection">
            <div class="insideForm">
              <h3>Informe seus dados</h3>
              <form method="POST">

                <div class="email">
                  <div class="textInside">
                    Email <span> * </span>
                  </div>
                  <input name="username" type="text" class="emailInput" autofocus="">
                </div>

                <div class="password">
                  <div class="textInside">
                    Senha <span> * </span>
                  </div>
                  <input name="password" type="password" class="passwordInput">
                  <label class="checkBox">
                    <input type="checkbox" checked="checked"> <span class="checkmark"> </span> </input>
                    <span class="textInside"> manter conectado </span>
                  </label>
                </div>
            </div>

            <div class="loginSection">
              <button type="submit" class="submit">Entrar</button>
              <div> <a href=""> Usar sign-on único (SSO) </a> </div>
            </div>

          </div>
          </form>

        </div>
      </div>

      <section class="signupSection">
        <a href=""> Não possui uma conta? <b> Criar uma conta </b> </a>
      </section>

    </div>
  </div>

</body>

</html>