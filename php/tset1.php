<?php
    session_start();
    $idd= $_SESSION['iddd']; 
    include 'navbar.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="chat.css">
    </head>
    <body>
    <div class="green-background"></div>
		<div class="wrap">
		    <section class="left">
				<div class="contact-list">
                    <?php 
                        
                        $idd= $_SESSION['iddd']; 
                        $host = "localhost:3307";
                        $dbusername = "root";
                        $dbpassword = "root";
                        $dbname = "login";
                        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                        $sql = "SELECT t.id,t.username from table1 as t inner join logtable as l on t.username = l.idtable where l.idpro=".$idd ;
                        $result = $conn-> query($sql);
                        if ($result-> num_rows > 0) 
                        {
                            while ($row = $result-> fetch_assoc()) {
                            echo"<p><a >" 
                            . '<img  src="https://via.placeholder.com/100">'  .
                                    "</a> <br> <a class='a' href='tset1.php?idd=". $row["id"] ."' >"   . $row["username"] ."</a></p><br>";
                                    
                            }
                        }   
                        else
                        {
                            echo"0 team";
                        }; 
                    ?>
                </div>
			</section>
            <section class="right">
				<div class="wrap-chat">
                    <div class="chat">
                        <?php
                            echo"
                            <div class='ifram'><iframe src='tset11.php?idd=".$_GET['idd']."' ></iframe>
                                </div>"
                            ;
                        ?>
                    </div>
                    <div class="information">

                    </div>
                </div>
                <form method="post" action="" class="wrapper" >
                    <div class="wrap-message">
						<div class="message">
                            <input type="text" name="message1" style='width: 100%;' type="text" class="input-message" placeholder="Schreibe eine Nachricht">
                            <input type="submit" name="Register" value="submit" style='width: 50px;border: none;'>
                            <?php include 'tset2.php';?>
                        </div>
                    </div><div id="autodata" style="display: none;"></div>
                </form>
            </section>
        </div>
    </body>
</html>


