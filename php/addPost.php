<?php
session_start();
require 'dbconnect.php';

if(!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO posts (user_id, title, content) VALUES (:user_id, :title, :content)";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute(['user_id' => $user_id, 'title' => $title, 'content' => $content]);
        header("Location: blogpage.php");
        exit;
    } catch (PDOException $e) {
        echo "An error occurred: " . $e->getMessage();
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>
