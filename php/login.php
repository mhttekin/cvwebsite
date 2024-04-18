
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require 'dbconnect.php';

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
echo "Username used for query: '$username'<br>";
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['username'] = $user['username'];
  ob_start();
  header("Location: blogpage.php");
  exit;
} else {
  header("Location: /blog.html");
  exit;
}

?>

