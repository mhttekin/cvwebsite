<?php
session_start();

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
                  <li><a href="/blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact</a></li>
               </ul>
            </nav>
         </div>
         <div class="main-content">
            <div class="blog-container">
               <form method="POST" action="addPost.php" id="form1">
                  <div class="postForm">
                     <h2>Add your post</h2>
                     <label for="title">Title of the post</label>
                     <input type="text" placeholder="Title" name="title" id="title" required>
                     <label for="content">Content of the post</label>
                     <input type="text" placeholder="Write something..." name="content" id="big1" required>
                     <div id="postc">
                        <button type="submit">POST</button>
                        <button type="button" id="clearb">CLEAR</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
     </div>
     <script src="/js/addpage.js"></script>
   </body>
</html>

