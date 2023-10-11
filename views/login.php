<?php


if($_POST){ login(); }

function login(){
  require_once __DIR__.'/../_.php';
  // TODO: validate
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  
}



require_once __DIR__.'/_header.php';
?>

<main>
  <form method="POST">
    <input name="user_email" type="text" placeholder="email">
    <input name="user_password" type="password" placeholder="password">
    <button>Login</button>
  </form>
</main>

<?php
require_once __DIR__.'/_footer.php';
?>