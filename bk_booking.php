<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nitindb";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_POST['submit'])){
        if( (!empty($_POST['name'])) && (!empty($_POST['email'])) && (!empty($_POST['car'])) && (!empty($_POST['bike'])) && (!empty($_POST['date'])) && (!empty($_POST['time']))  ) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $car = $_POST['car'];
            $bike = $_POST['bike'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $query = "insert into booking(name, email, car, bike, date, time) values ('$name', '$email', '$car', '$bike', '$date', '$time')";
            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($run){
                echo "form submitted";
            } else {
                echo "form not submitted";
            }
        }
        else {
            echo "all field req";
        }
    }

?>