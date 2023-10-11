<?php


if($_POST){ login(); }

function login(){
  require_once __DIR__.'/../_.php';
  // TODO: validate
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  $db = _db();
  $q = $db->prepare('SELECT * FROM users WHERE user_email = :user_email');
  $q->bindValue(':user_email', $_POST['user_email']);
  $q->execute();
  $user = $q->fetch();
  if( ! password_verify($_POST['user_password'], $user['user_password']) ){
    echo 'Try again';
    return;
  }
  session_start();
  echo json_encode($user);
}



require_once __DIR__.'/_header.php';
?>

<main>
  <form method="POST">
    <input name="user_email" type="text" placeholder="email">
    <input name="user_password" type="text" placeholder="password">
    <button>Login</button>
  </form>
</main>

<?php
require_once __DIR__.'/_footer.php';
?>