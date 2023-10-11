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
<body class="w-full h-screen bg-sky-100">

<nav class="flex items-center justify-between w-full h-16 px-4 
text-white bg-sky-700">
  
  <a href="/">Home</a>
  
  
  <?php if( $_SESSION && $_SESSION['user']['user_role_name'] == 'admin' ): ?>
    <div class="flex gap-4 mx-auto">
      <a href="/customers">Customers</a>
      <a href="/employees">Employees</a>
      <a href="/partners">Partners</a>
    </div>
  <?php endif ?>
    

  <?php if( ! isset($_SESSION['user']) ): ?>
    <a href="/login" class="ml-auto">Login</a>
  <?php else: ?>
    <a href="/logout" class="ml-auto">Logout</a>
  <?php endif ?>  


</nav>