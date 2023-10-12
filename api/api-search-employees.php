<?php
header('Content-Type: application/json');
require_once __DIR__.'/../_.php';
try{

  $db = _db();
  $q = $db->prepare('
    SELECT user_name, user_last_name, employee_salary
    FROM users
    JOIN employees 
    ON user_id = employee_id
    WHERE user_name LIKE :user_name COLLATE NOCASE 
    OR user_last_name LIKE :user_last_name COLLATE NOCASE 
  ');
  $q->bindValue(':user_name', "%{$_POST['user_name_or_last_name']}%");
  $q->bindValue(':user_last_name', "%{$_POST['user_name_or_last_name']}%");
  $q->execute();
  $employees = $q->fetchAll();
  echo json_encode($employees);

}catch(Exception $e){
    $status_code = !ctype_digit($e->getCode()) ? 500 : $e->getCode();
    $message = strlen($e->getMessage()) == 0 ? 'error - '.$e->getLine() : $e->getMessage();
    http_response_code($status_code);
    echo json_encode(['info'=>$message]);
}
