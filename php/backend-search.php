<?php
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "login0";
    $conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
    error_reporting(0);
    $username_delete=$_GET['rn'];
    $query="DELETE FROM `loginform` WHERE username = '$username_delete'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        header('location:home1.php') ;
    }
    else
    {
        header('location:home1.php') ;
        echo"no";
    }
?>