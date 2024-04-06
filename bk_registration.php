<?php
    session_start();
    header('location:login.php');

    // con = connection
    $con = mysqli_connect('localhost', 'root', '');

    //selecting database
    mysqli_select_db($con, 'user_registration');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = " select * from usertable where name = '$name'";

    // result variable to store above query
    $result = mysqli_query($con, $s);

    // checking how many times username appread in db
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "username already taken";
    } else {
        $reg = " insert into usertable(name, password) values ('$name', '$pass')";
        mysqli_query($con, $reg);
        echo "Registration successful";
    }
?>