<?php
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "root";
$dbname = "login";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    $id_task_prject =$_GET['id'];
    $taskname  = filter_input(INPUT_POST, 'taskname');
    $from  = filter_input(INPUT_POST, 'from');
    $to  = filter_input(INPUT_POST, 'to');
    $taskname1  = filter_input(INPUT_POST, 'taskname1');

        if (!empty($taskname))
        {
    
            if (mysqli_connect_error())
            {
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
            }
            else
            {
                $sql = "INSERT INTO task (id_task_prject ,taskname,from1,to1,taskname1)
                values ('$id_task_prject','$taskname','$from','$to','$taskname1')";
                    
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
            die();
        }

?>