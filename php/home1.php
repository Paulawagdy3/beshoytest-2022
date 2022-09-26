<?php
    session_start();
    $_SESSION['iddd']=$_GET['id'];
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UT-8">
        <title>wrb log</title>
        <link rel="stylesheet" href="../css/home2.css">
        <script src="../js/nav-ym3n.js"></script>
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
                        <input style="margin-bottom: 10px;" type="text" name="idtable" class="input"><br>
                    </div> 
                    <div class="inputfield">
                        <input style="margin-bottom: 10px;" type="submit" value="Register" name="Register" class="btn"><br>
                    </div>
                    <?php                        
                        include ("Add,team.php");
                    ?>
                </form>
                <form method="post"  action="" class="wrapperr2">
                    <div>
                        <div class="inputfield">
                            <label style="margin-bottom: 10px;">userteam</label><br>
                            <input style="margin-bottom: 10px;" type="text" name="username" class="input">
                        </div>  
                        <div class="inputfield" >
                            <input style="margin-bottom: 10px;" type="submit" value="Register" class="btn">
                        </div>
                    </div>
                    <?php
                        include ("mac,team.php");
                    ?>
                </form>          
            </div>    
        </div> 

        <!--showdata-->
        <div class="body">        
            <div class="table">
                <div class="container">
                    <div class="show_team">
                        <h1 class="title1">team</h1>
                        <?php
                            include ("Data,Show,team.php");
                        ?> 
                        <p class="open_add" id="span">
                            <a class="but" >
                                <i class="fas fa-plus"></i>
                            </a>
                        </p>  
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
                                
                                
                            
