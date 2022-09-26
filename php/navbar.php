<?php
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "root";
$dbname = "login";
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UT-8">
        <title>nav-ymen</title>
        <link rel="stylesheet" href="../css/nav-ymen1.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    <body>

        <div class="name-team">
            <div>
            
                <a> team</a>
    
    
            </div>
            <div class="info">
                <img src="https://via.placeholder.com/60">
                <?php $idd= $_SESSION['iddd'];
                    $sql = "SELECT * from loginform where id=".$idd ;
                    $result = $conn-> query($sql);
                    if ($result-> num_rows > 0) 
                    {
                        while ($row = $result-> fetch_assoc()) 
                        {
                        echo"
                            <h3 class='name'> ". $row["firstname"].$row["lastname"]."</h3>";
                        }
                    }   
                ?>
            </div>
        </div>

        <!--start nav ymen-->
        <div class="wrapper">
            <div class="ma">
                <div class="sidebar2" id="sidebar">
                    <ul>
                        <li class="but0" onclick="toggleSidebar4(this)">
                            <a onclick="toggleSidebar(this)"  id="sidebar2">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                        <?php
                            $sql = "SELECT * from loginform where id=".$idd;
                            $result = $conn-> query($sql);
                            
                            if ($result-> num_rows > 0) 
                            {
                                while ($row = $result-> fetch_assoc())
                                {
                                    echo
                                    "
                                        <li class='l'><a href='home1.php?id=" .$row["id"]."'>Home<i class='fas fa-home'></i></a></li>
                                        <li class='li'><a href='prophile.php?id=" .$row["id"]."'>Profile<i class='fas fa-user'></i></a></li>
                                        <li class='li'><a href='tset1.php?id=" .$row["id"]."'>Issuy<i class='fas fa-address-card'></i></a></li>
                                        <li class='li'><a href='#'>Chat<i class='fas fa-project-diagram'></i></a></li>
                                        <li class='li'><a href='#'>tash<i class='fas fa-blog'></i></a></li>
                                        <li class='li'><a href='#'>Stetis<i class='fas fa-blog'></i></a></li>
                                    " ;
                                }
                            }    
                        ?>
                        
                        
                    </ul>
                </div>
            </div>    
        </div>
        <!--end nav ymen-->
        
        <!--start nav t7t-->

        
    </body>
    <script src="../js/nav-ym3n.js"></script>
</html>    