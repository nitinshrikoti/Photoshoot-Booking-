<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- navbar -->
    <link rel="stylesheet" href="css/Style.css">
    <!-- login, register -->
    <link rel="stylesheet" href="css/login.css">
    <title>Log-で</title>
</head>
<body>

   <nav class="navbar h-nav">
        <div class="logo vis">
            <a href="index.php" target="_self">
                <img src="images/logo.png" alt="logo" >
            </a>
        </div>
        <ul class="nav-list vis">
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">LogIn</a></li>
            <!-- <li><a href="logout.php">Logout</a></li> -->
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
   </nav>
   <section class="login-sec">
      <div class="form-container">
  
      <form action="bk_validation.php" method="post">
         <h3>login</h3>
         <input class="login-input" type="text" name="user" required placeholder="username">
         <input class="login-input" type="password" name="password" required placeholder="password">
         <input type="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="register.php">register now</a></p>
     </form>
  
      </div>

   </section>

    <footer class="background text-footer">
        <p class="footer">&copy; 2022-2027 - All Rights Reserved</p>
        <ul class="nav-list foot-nav-list">
            <li><a href="https://www.instagram.com/spoiledbrat.24/">Instagram</a></li>
            <li><a href="https://www.instagram.com/spoiledbrat.24/">Facebook</a></li>  
         </ul>

    </footer>
    <script src="js/resp.js"></script>
</body>
</html>