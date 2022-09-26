<?php
    $idteam  =$_GET['id'];
    $idproject  = filter_input(INPUT_POST, 'idproject');

        if (!empty($idproject))
        {
    
            if (mysqli_connect_error())
            {
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
            }
            else
            {
                $sql = "INSERT INTO teaproj (idteam,idproject)
                values ('$idteam','$idproject')";
                    
                if ($conn->query($sql))
                {
                    echo"hiiiiiiiiiiii" ;
                }
                else
                {
                    echo "Error: ". $sql ."
                    ". $conn->error;
                }
                $conn->close();    
            }
        }
        else
        {
            echo "idproject should not be empty";
        }

?>