<?php

    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "login";
    $Connect = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    $idpro=$_GET['id'];
    $idtable = filter_input(INPUT_POST, 'idtable');


    if (!empty($idtable))
    {                       
        if (mysqli_connect_error())
        {
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());  
        }
        else
        {
            
            $sql = "INSERT INTO logtable (idtable,idpro) values ('$idtable','$idpro')";                         
            if ($Connect->query($sql))
            {
                echo "refresh page" ;
            }
            else
            {
            echo "Error: ". $sql ."
            ". $Connect->error;
            }
            $Connect->close();
        }
    }
    else
    {
        echo "username should not be empty";
    }

?>