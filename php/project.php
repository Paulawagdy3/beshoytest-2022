<?php
session_start();
$idd= $_SESSION['iddd'];
$_SESSION['idmember1']=$_GET['id'];
$idmember1=  $_SESSION['idmember1'];

    include 'munber.php';
    
    include 'navbar.php';
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
        <link rel="stylesheet" href="../css/project1.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    
    <body>
        <!--add-jointeam-->
        <div id="myModal" class="modal1">
            <div class="card">
                <div class="but1" id="myBtn">
                    <a>
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                <form class="wrapperr1" method="post" action="">                            
                    <div class="inputfield">
                        <label style="margin-bottom: 10px;">name </label><br>
                        <input style="margin-bottom: 10px;" type="text" name="projectname" class="input"><br>
                        <input style="margin-bottom: 10px;" type="text" name="taskname" class="input"><br>
                    </div> 
                    <div class="inputfield">
                        <input style="margin-bottom: 10px;" type="submit" value="Register" name="Register" class="btn"><br>
                    </div>
                    <?php
                        include ("proj,dd.php");
                    ?>
                </form>
                <form method="post"  action="" class="wrapperr2">
                    <div>
                        <div class="inputfield">
                            <label style="margin-bottom: 10px;">userteam</label><br>
                            <input style="margin-bottom: 10px;" type="text" name="idproject" class="input">
                        </div>  
                        <div class="inputfield" >
                            <input style="margin-bottom: 10px;" type="submit" value="Register" class="btn">
                        </div>
                    </div>
                    <?php                        
                        include ("add,pr.php");
                    ?>
                </form>          
            </div>    
        </div>
        <!--showdata-->
        <div class="info" style="margin-top: -89px;">
            <div class="container">
                <div class="card1">
                    <h1 class="title1">project</h1>
                    <div>
                        <?php
                            $sql = "SELECT t.projectname , t.id from project as t inner join teaproj as l on t.projectname = l.idproject where l.idteam=".$_GET['id'];
                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0) 
                            {
                                while ($row = $result-> fetch_assoc()) 
                                {
                                    echo 
                                    "
                                        <div class='project'>
                                            <a class='title'  href='page1.php?id=" . $row["id"]."'>". $row["projectname"]."</a>
                                        </div> 
                                           
                                    ";
                                    
                                }        
                            } 
                        ?>
                        <div class='project' id='span'>
                            <a class='title' >add team</a>
                            <a class='but' >
                                <i class='fas fa-plus'></i>
                            </a>
                        </div>  
                    </div> 
                </div>
            </div>       
        </div>    
    </body>
</html>


<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementById("span");
    btn.onclick = function() 
    {
        modal.style.display = "none";
    }

    span.onclick = function() 
    {
        modal.style.display = "block";
    }

    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
</script>
                                
                                
                            
                            
                            
