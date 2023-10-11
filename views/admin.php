<?php
session_start();
if( $_SESSION['user']['user_role_name'] != 'admin'){
  header('Location: /login');
  exit();
}


require_once __DIR__.'/_header.php';
?>

<main>
  Admin
</main>

<?php
require_once __DIR__.'/_footer.php';
?>