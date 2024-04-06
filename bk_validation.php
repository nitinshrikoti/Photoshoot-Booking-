<?php
    session_start();

    // con = connection
    $con = mysqli_connect('localhost', 'root', '');

    //selecting database
    mysqli_select_db($con, 'nitindb');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = " select * from usertable where name = '$name' && password = '$pass'";

    // result variable to store above query
    $result = mysqli_query($con, $s);

    // checking how many times username appread in db
    $num = mysqli_num_rows($result);

    if($num == 1){
        header('location:index.php');
    } else {
        header('location:login.php');
    }
?>