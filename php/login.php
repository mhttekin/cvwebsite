
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require 'dbconnect.php';  // Ensure this file provides a valid $pdo object.

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

// Fetch the user from the database based solely on username.
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
echo "Username used for query: '$username'<br>";
$user = $stmt->fetch();

if (!$user) {
    echo "No user found for this username.<br>";
} else {
    // Existing debugging statements
    echo "DB hashed password: " . $user['password'] . "<br>";
    echo "Verification result: " . (password_verify($password, $user['password']) ? "true" : "false") . "<br>";
}

var_dump($user);

// Debugging output after fetching the user.
echo "DB hashed password: " . ($user ? $user['password'] : 'No user found') . "<br>";
echo "Posted password: " . $password . "<br>";
echo "Verification result: " . ($user && password_verify($password, $user['password']) ? "true" : "false") . "<br>";
echo "Test hash of 'admin': " . password_hash("admin", PASSWORD_DEFAULT) . "<br>";

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['user_id'] = $user['id'];
  ob_start();
  header("Location: blogpage.php");
  exit;
} else {
    echo "Invalid username or password!";
}

var_dump($user);  // This should be after checking the user data.
?>

