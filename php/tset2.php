<?php
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "root";
$dbname = "login";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if($conn->connect_error)
{
    die("connect_error");
}


$idd= $_SESSION['iddd'];
$sql = "SELECT * from loginform where id=".$idd ;
$result = $conn-> query($sql);
if ($result-> num_rows > 0) 
{
    while ($row = $result-> fetch_assoc()) 
    {
         $from1=$row["firstname"].$row["lastname"];
    }
}

$message1 = filter_input(INPUT_POST, 'message1');
$idteam = $_GET['idd'];
if (!empty($message1) && !empty($from1)  )
{                                            
    if (mysqli_connect_error())
    {
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }
    else
    {
        $sq = "INSERT INTO chat (message1,from1,idteam) values ('$message1','$from1','$idteam')";
                                                        
        if ($conn->query($sq))
        {
        }
        else
        {
            echo "Error: ". $sq ."
            ";
        }
        $conn->close();
    }
}

?>
