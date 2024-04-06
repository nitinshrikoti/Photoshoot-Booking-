<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- navbar -->
    <link rel="stylesheet" href="css/Style.css">
    <!-- booking -->
    <link rel="stylesheet" href="css/Booking.css">
    <title>booking</title>
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

    <section class="section2 background" id="services">
        <h2>BOOKING OPEN</h2>
        <p></p>
        <div class = "card-container">
            <div class = "card-content">
                <h3>Reservation</h3>
                <form class="form" action="bk_booking.php" method="post" >
                    <div class = "form-row">

                        <input type="text" name="name" placeholder="name" required>                    
                        <input type="email" name="email" placeholder="email" required>   
                        <input type="text" name="car" placeholder="car" >   
                        <input type="text" name="bike" placeholder="bike" >   
                        <input type="text" name="date" placeholder="20 Jan 2001" required>   
                        <input type="text" name="time" placeholder="time b/w 10:00-18:00" required>   

                        <!-- <select name="booking_type" required>
                            <option value="car">Car</option>
                            <option value="bike">Bike</option>
                        </select>                   
                        <select name = "days" required>
                            <option value = "day-select">Select Day</option>
                            <option value = "sunday">Sunday</option>
                            <option value = "monday">Monday</option>
                            <option value = "tuesday">Tuesday</option>
                            <option value = "wednesday">Wednesday</option>
                            <option value = "thursday">Thursday</option>
                            <option value = "friday">Friday</option>
                            <option value = "saturday">Saturday</option>
                        </select>
                        <select name = "hours" required>
                            <option value = "hour-select">Select Hour</option>
                            <option value = "10">10: 00</option>
                            <option value = "10">12: 00</option>
                            <option value = "10">14: 00</option>
                            <option value = "10">16: 00</option>
                            <option value = "10">18: 00</option>
                        </select> -->

                    </div>
                    <div class = "form-row">
                        <input type = "submit" name="submit" value = "BOOK">
                    </div>
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