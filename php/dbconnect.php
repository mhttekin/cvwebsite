<?php
$host = 'localhost';
$dbname = 'blogDB';
$username = 'appuser';
$password = 'user_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully";  // Fixed a typo here as well from 'successfuly' to 'successfully'
} catch (PDOException $e) {  // Specify the exception type and variable
    die("Could not connect to the database $dbname: " . $e->getMessage());
}
?>
