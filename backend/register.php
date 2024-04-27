<?php
require 'config.php';


$username = $_POST['username'];
$password = $_POST['password'];
// $token = md5($username.$password);

$result = $conn->query("INSERT INTO tbl_user (id, username, password, token) VALUES (DEFAULT, '$username', '$password', '')");

if ($result) {
  $code = 200;
  $message = 'Register Successfully';
  
} else {
  $code = 404;
  $message = 'Register Failed';
  
}

echo json_encode([
  'Response' => $code,
  'Message' => $message,
  // 'Token' => $token
]);
?>
