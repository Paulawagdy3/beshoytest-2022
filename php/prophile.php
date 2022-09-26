<?php

    include 'navbar.php';
     
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "login";
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $Gender = filter_input(INPUT_POST, 'Gender');
    $Phone = filter_input(INPUT_POST, 'Phone');
?>                 


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/prophile1.css" rel="stylesheet">
    </head>
    <body>
            <div class='container1'>
                <?php
                    $sql = "SELECT * from loginform where id=".$_GET['id'];
                    $result = $conn-> query($sql);
                    if ($result-> num_rows > 0) 
                    {
                        while ($row = $result-> fetch_assoc()) 
                        {
                            echo "
                            <div class='pro'>
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'>
                                <path fill='#0099ff' fill-opacity='1' d='M0,64L60,90.7C120,117,240,171,360,192C480,213,600,203,720,165.3C840,128,960,64,1080,42.7C1200,21,1320,43,1380,53.3L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z'></path>
                            </svg>
                                <div class='info'>
                                    <img src='https://via.placeholder.com/200'>
                                    <div class='a'>
                                        <p><a class='php0'>username:</a><a class='php'>". $row["username"]."</a></p>
                                        <p><a class='php0'>password:</a><a class='php'>". $row["password"]."<a>
                                        <p><a class='php0'>firstname:</a><a class='php'>". $row["firstname"]."<a>
                                        <p><a class='php0'>lastname:</a><a class='php'>". $row["lastname"]."<a>
                                        <p><a class='php0'>Gender:</a><a class='php'>". $row["Gender"]."<a>
                                        <p><a class='php0'>Phone:</a><a class='php'>". $row["Phone"]."<a>
                                    </div>    
                                </div>
                            </div>       
                             ";
                        }
                    }
                    else
                    {
                        echo"0 result";
                    }
                    $conn-> close();
                ?>
                
            </div>
    </body>
</html>        
