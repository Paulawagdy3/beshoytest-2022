<?php


$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "root";
$dbname = "login";
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
$username = filter_input(INPUT_POST, 'username');

?>                 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UT-8">
    <title>page1</title>
    <link rel="stylesheet" href="../css/nav-ymen.css">
    <link rel="stylesheet" href="../css/page.css">
</head>
    <body>
        <?php
                        
            $sql = "SELECT * from taskinfo where id_task_info=".$_GET['id'] ;
            $result = $conn-> query($sql);      

            if ($result-> num_rows > 0) 
            {
                while ($row = $result-> fetch_assoc()) 
                {
                    echo"
                        <p style='color:white'>". $row["dis"] ."</p>
                        "
                    ;
                }
            }
        ?>
    </body>
</html>    