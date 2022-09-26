    <?php

session_start();
$idd= $_SESSION['iddd'];
$_SESSION['idmember']=$_GET['id'];
    include 'navbar.php';
    include 'munber.php';

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
        <link rel="stylesheet" href="../css/nav-ymen1.css">
        <link rel="stylesheet" href="../css/page2.css">
    </head>
    <body>
        <!--start page-->
        <div class="back">
            <div class="dec">
                <div class="container">
                    <div class="dic-info">
                        <h1>Deccrption</h1><?php
                        $sql = "SELECT taskname , id from project where id=".$_GET['id'];
                        $result = $conn-> query($sql);
                        
                        if ($result-> num_rows > 0) 
                        {
                            while ($row = $result-> fetch_assoc()) 
                            {
                            echo"
                        <p>". $row["taskname"] ."</p>";}}?>
                        
                    </div><a class="mac_team" id="myBtn"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class='task'>
                <div class='container'>
                <?php
                        $sql = "SELECT * from task where id_task_prject=".$_GET['id'] ;
                        $result = $conn-> query($sql);
                        
                        if ($result-> num_rows > 0) 
                        {
                            while ($row = $result-> fetch_assoc()) 
                            {
                            echo"
                                <div class='task-info'>
                                    <h2>". $row["taskname"] ."</h2>
                                    <div class='time'>
                                        <a>From : ". $row["from1"] ."</a>
                                        <a>to : ". $row["to1"] ."</a>
                                    </div>
                                    <div class='progress'>
                                        <div class='progress-bar' style='width:70%'>
                                            70%
                                        </div>
                                    </div>
                                    <label class='check'>   
                                        <div>
                                            <a href='taskinfo.php?id=". $row["id"] ."' >". $row["taskname"] ."</a>
                                            <input type='checkbox'>
                                            <div class='checkmark'></div>
                                        </div>
                                    </label>
                                </div>  
                                "
                            ;
                        }
                    } 
                ?> 
            </div>
        </div>
        <div id="myModal" class="modal">
                            <div class="card2">
                                <span class="close">&times;</span>
                                <form method="post"  action="" class="wrapperr">
                                    <div>
                                        <div class="inputfield">
                                            <label>taskname</label>
                                            <input type="text" name="taskname" class="input">
                                        </div>  
                                        <div class="inputfield">
                                            <label>from</label>
                                            <input type="text" name="from" class="input">
                                        </div>
                                        <div class="inputfield">
                                            <label>to</label>
                                            <input type="text" name="to" class="input">
                                        </div>  
                                        <div class="inputfield">
                                            <label>taskname</label>
                                            <input type="text" name="taskname1" class="input">
                                        </div>
                                        <div class="inputfield" >
                                            <input type="submit" value="Register" class="btn">
                                        </div>
                                    </div>
                                    <script>
                                        var modal = document.getElementById("myModal");
                                        var btn = document.getElementById("myBtn");
                                        var span = document.getElementsByClassName("close")[0];
                                        btn.onclick = function() 
                                        {
                                            modal.style.display = "block";
                                        }

                                        span.onclick = function() 
                                        {
                                            modal.style.display = "none";
                                        }

                                        window.onclick = function(event) 
                                        {
                                            if (event.target == modal) 
                                            {
                                            modal.style.display = "none";
                                            }
                                        }
                                    </script>
                                    <?php
                                        include ("add,task.php");
                                    ?>
                                </form>
                        </div> 
                    </div>
    </body>
    <script src="../js/nav-ym3n.js"></script>
</html>    