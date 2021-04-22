<?php

session_start();


function auth_login(string $username, string $password): array
{
  $user = ['id' => 1, 'username' => $username];
  $_SESSION['user'] = $user;
  return $user;
}

function auth_current_user(): array
{
  return $_SESSION['user'];
}
