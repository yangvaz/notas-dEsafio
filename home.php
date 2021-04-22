<?php

require_once 'auth.php';

$user = auth_current_user();

echo ($user['username']);
// var_dump($user);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Sistema de Login </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

</head>

<body>
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
          <?php $user ?>
        </div>
      </div>
    </div>
  </section>
</body>

</html>