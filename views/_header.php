<?php
require_once __DIR__.'/../_.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/app.css">
  <title>Document</title>
</head>
<body class="w-full h-screen bg-sky-700">

<nav class="">
  <a href="/">Home</a>
  <a href="/login">Login</a>
  <a href="/logout">Logout</a>

  <?php if( $_SESSION && $_SESSION['user']['user_role_name'] == 'admin' ): ?>
    <a href="/customers">Customers</a>
    <a href="/employees">Employes</a>
    <a href="/partners">partners</a>
  <?php endif ?>

</nav>