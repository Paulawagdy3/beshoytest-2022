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
        <title>project</title>
        <link rel="stylesheet" href="../css/nav-ymen1.css">
    </head>
    
    <body>
        <div class='wrapper1'>
            <div class='sidebar1' id='sidebar1'>
                <div class='title-mumber'>
                    <a>mumber</a>
                </div>
                <ul>
                    <?php 

                    $idmember1=  $_SESSION['idmember1'];
                        //$sql = "SELECT * from logtable  where id=".$_GET['id'];
                        $sql = "SELECT u.firstname from  loginform as u , table1 as t inner join logtable as l on t.username = l.idtable where t.id=".$idmember1;

                        $result = $conn-> query($sql);
                        
                        if ($result-> num_rows > 0) 
                        {
                            while ($row = $result-> fetch_assoc()) 
                            {
                            echo"    
                                <li>
                                    <img src='https://via.placeholder.com/35'>
                                    <div>
                                        <a>". $row["firstname"] ."</a>
                                    </div>
                                </li>";
                            }
                        }
                    ?>
                </ul>  
            </div>
        </div>    
    </body>
</html>
