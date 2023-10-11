<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<nav class="">
  <a href="/">Home</a>
  <a href="/login">Login</a>
  <a href="/logout">Logout</a>

  <?php if( $_SESSION['user']['user_role_name'] != 'admin' ): ?>
    <a href="/users">Users</a>
    <a href="/employees">Employes</a>
    <a href="/partners">partners</a>
  <?php endif ?>

</nav>