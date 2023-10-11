<?php
require_once __DIR__.'/_header.php';

$db = _db();
$q = $db->prepare(' SELECT * FROM users 
                    WHERE user_name = :word COLLATE NOCASE 
                    OR user_last_name = :word COLLATE NOCASE');
                    
$q->bindValue(':word', $_GET['query']);
$q->execute();
$users = $q->fetchAll();

?>

<main>
<?php foreach($users as $user): ?>
    <div class="flex">
      <div class="hidden"><?= $user['user_id'] ?></div>
      <div class="w-1/4"><?php out($user['user_name']) ?></div>
      <div class="w-1/4"><?php out($user['user_last_name']) ?></div>
      <div class="w-1/4"><?php out($user['user_email']) ?></div>
      <button class="w-1/4">🗑️</button>
    </div>
  <?php endforeach ?>
</main>

<?php
require_once __DIR__.'/_footer.php';
?>
