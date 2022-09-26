<?php

    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "login";
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    $projectname = filter_input(INPUT_POST, 'projectname');
    $taskname = filter_input(INPUT_POST, 'taskname');
    $idteam  =$_GET['id'];
    $idproject  = filter_input(INPUT_POST, 'projectname');

    if (!empty($projectname))
    {
        if (!empty($taskname))
        {
    
            if (mysqli_connect_error())
            {
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
            }
            else
            {
                $sql = "INSERT INTO project (projectname,taskname)
                values ('$projectname','$taskname')";
                    
                if ($conn->query($sql))
                {
                    echo"hi" ;
                }
                else
                {
                    echo "Error: ". $sql ."
                    ". $conn->error;
                }
                $sql1 = "INSERT INTO teaproj (idteam,idproject)
                values ('$idteam','$idproject')";
                    
                if ($conn->query($sql1))
                {
                    echo"hiiiiiiiiiiii" ;
                }
                else
                {
                    echo "Error: ". $sql1 ."
                    ". $conn->error;
                }
                $conn->close(); 
            }
        }
        else
        {
            echo "taskname should not be empty";
        }
    }
    else
    {
        echo "projectname should not be empty";
    }
?>
