<?php
session_start();

if(!isset($_SESSION['user_id'])) {
  header('Location: /blog.html');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Blog Page</title>
      <link href="/css/reset.css" rel="stylesheet" type="text/css">
      <link href="/css/blogphp.css" rel="stylesheet" type="text/css" media="screen"> 
   </head>
   <body>
      <div class="grid-container">
         <div class="header-content">
            <header id="header">
               <h1>mhtblog</h1>
            </header>
            <nav id="navbar">
               <ul>
                  <li><a href="/index.html">About</a></li>
                  <li><a href="/portfolio.html">Portfolio</a></li>
                  <li><a href="/php/blogpage.php">Blog</a></li>
               </ul>
            </nav>
         </div>
         <div class="main-content">
            <div class="blog-container">
               <div class="menu-bar">
                  <div class="welcome-chart">
                  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?></h1>
                  </div>
                  <div class="button-panel">
                     <button id="addBtn">+</button>
                     <button id="logoff">Log Out</button>
                  </div>
               </div>
               <div class="content-space">
                  <?php
                     require 'dbconnect.php';
                     try {
                        $stmt = $pdo->prepare("SELECT * FROM posts ORDER BY post_id DESC");
                        $stmt->execute();

                        if ($stmt->rowCount() > 0) {
                           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                              echo "<div class='post'>";
                              echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                              echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
                              echo "<small>Posted by User ID: " . htmlspecialchars($row['user_id']) . "</small>";
                              echo "</div>";
                           }
                        } 
                        else {
                           echo "<p>No posts found.</p>";
                        }
                     }
                     catch (PDOException $e) {
                       echo "Error fetching posts: " . $e->getMessage();
                     }
                  ?>
               </div>
            </div>
         </div>
      </div>
      <script src="/js/blogpage.js"></script>
   </body>
</html>
