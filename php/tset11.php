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
$sql = "SELECT * from chat WHERE idteam=".$_GET['idd'];

$result = $con-> query($sql);
                        
if ($result-> num_rows > 0) 
    {
        while ($row = $result-> fetch_assoc()) 
        {
            echo"    
                    <div>
                        <a>". $row["message1"] ."</a>
                        <a>". $row["from1"] ."</a>
                        <a>". $row["created"] ."</a>
                    </div>
                "
            ;
        }
    }