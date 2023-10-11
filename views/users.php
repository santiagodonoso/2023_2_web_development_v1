<?php
require_once __DIR__.'/_header.php';
_is_admin(); // middleware

$db = _db();
$q = $db->prepare(' SELECT user_id, user_name, user_last_name, user_email, user_role_name 
                    FROM users LIMIT 10');
$q->execute();
$users = $q->fetchAll();                  
?>

<main>
  Users
  <?php if( ! $users ): ?>
    <h1>No users in the system</h1>
  <?php endif ?>

  <?php foreach($users as $user): ?>
    <div class="">
      <div class=""><?= $user['user_id'] ?></div>
      <div class=""><?= $user['user_name'] ?></div>
      <div class=""><?= $user['user_last_name'] ?></div>
      <div class=""><?= $user['user_email'] ?></div>
      <div class=""><?= $user['user_role_name'] ?></div>
    </div>
  <?php endforeach ?>


</main>

<?php
require_once __DIR__.'/_footer.php';
?>