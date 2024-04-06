<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- navbar -->
    <link rel="stylesheet" href="css/Style.css">
    <!-- contact -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>Contact-自分</title>
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
    <section class="cont-sec">
        <h2 class="contact-head">Get In Touch</h2>
    </section>
    <section class="contact-section">
        <div class="contact-sec">
            <div class="contact-info">
                <div><p class="contact-para contact-para1">For inquiries about<br>sessions and pricing fill out<br>the form and someone will<br>get back to you.</p></div>
                <p class="contact-para"><i class="fas fa-map-marker-alt"></i> 500 Terry Francois Street<br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp San Francisco, CA 94158</p>
                <p class="contact-para"><i class="fas fa-envelope"></i> shri1@email.com</p>
                <p class="contact-para"><i class="fas fa-phone"></i> 123-456-7890</p>
                <p class="contact-para"><i class="fas fa-clock"></i> Mon - Fri 8:00 AM to 5:00 PM</p>
            </div> 
            <div class="contact-form">
                <form class="contact" action="bk_contact.php" method="post">
                    <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                    <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" class="send-btn" value="Send">
                </form>
            </div>
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