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

$result = array();
$message = filter_input(INPUT_POST, 'message');
$from = filter_input(INPUT_POST, 'from');


if(!empty($message) && !empty ($from))
{
    if (mysqli_connect_error())
        {
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        else
        {
        $sql = "INSERT INTO chat (message1,from1)
        values ('$message','$from')";
                                                        
        $result['send-status'] = $conn->query($sql);
        $conn->close();
                                                    
    }    
}
    //$sql = "SELECT * from logtable  where id=".$_GET['id'];
    $sql = "SELECT * from chat WHERE idteam=".$_GET['id'];

    $result = $con-> query($sql);
                            
    if ($result-> num_rows > 0) 
        {
            while ($row = $result-> fetch_assoc()) 
            {
                echo"    
                    <li>
                        <div>
                            <a>". $row["message1"] ."</a>
                            <a>". $row["from1"] ."</a>
                            <a>". $row["created"] ."</a>
                        </div>
                    </li>"
                ;
            }
        }
?>
