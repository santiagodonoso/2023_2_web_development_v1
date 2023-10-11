<?php


if($_POST){ login(); }

function login(){
  require_once __DIR__.'/../_.php';
  // TODO: validate

  $db = _db();
  $q = $db->prepare('SELECT * FROM users WHERE user_email = :user_email');
  $q->bindValue(':user_email', $_POST['user_email']);
  $q->execute();
  $user = $q->fetch();
  if( ! $user ){
    echo 'Try again';
    return;
  }
  if( ! password_verify($_POST['user_password'], $user['user_password']) ){
    echo 'Try again';
    return;
  }

  session_start();
  unset($user['user_password']);
  echo json_encode($user);
  $_SESSION['user'] = $user;
  if( $user['user_role_name'] == 'admin' ){
    header('Location: /admin');
    exit();
  }
}



require_once __DIR__.'/_header.php';
?>

<main>
  <form method="POST">
    <input name="user_email" type="text" placeholder="email" value="admin@company.com">
    <input name="user_password" type="text" placeholder="password" value="password">
    <button>Login</button>
  </form>
</main>

<?php
require_once __DIR__.'/_footer.php';
?>