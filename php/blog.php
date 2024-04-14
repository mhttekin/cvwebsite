<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Mehmet Tekin</title>
    <link rel="stylesheet" href="/css/reset.css" type="text/css">
    <link rel="stylesheet" href="/css/login.css" media="screen" type="text/css">
</head>
<body>
    <div class="grid-container">
        <div class="header-content">
            <header id="header">
                    <h1>Mehmet Tekin</h1>
                    <p>Comp Sci Student at QMUL</p>
            </header>
        </div>
        <div class="nav-content">
            <nav id="navbar">
                <ul>
                    <li><a href="index.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <div class="login">
                <form action="php/login.php" method="post">
                    <div class="container">
                        <h2>Sign in to blog</h2>
                        <label for="uname" id="tag"><b>Username</b></label>
                        <input type="email" placeholder="Enter Email Address" name="uname" id="input1" required>
                        <label for="psw" id="tag"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" id="input1" required>
                        <button type="submit" id="logbtn">Login</button>
                        <label id="check">
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                    <div class="container">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
