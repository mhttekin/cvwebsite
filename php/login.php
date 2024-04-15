<?php
session_start();
require 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password]);
$user = $stmt->fetch();

if($user) {
  $_SESSION['user_id'] = $user['id'];
  header('Location: blogpage.php');
  exit();

} else {
  echo "Invalid username or password!";
}

?>
