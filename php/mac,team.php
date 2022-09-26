<?php
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "root";
$dbname = "login";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$username = filter_input(INPUT_POST, 'username');
$idpro=$_GET['id'];
$idtable = filter_input(INPUT_POST, 'username');

if (!empty($username))
{
   
   if (mysqli_connect_error())
   {
       die('Connect Error ('. mysqli_connect_errno() .') '
       . mysqli_connect_error());
   }
   else
   {
       $sql = "INSERT INTO table1 (username)
       values ('$username')";
           
       if ($conn->query($sql))
       {
           echo"hi" ;
       }
       else
       {
           echo "Error: ". $sql ."
           ". $conn->error;
       }
       $sql1 = "INSERT INTO logtable (idtable,idpro) values ('$idtable','$idpro')";                         
            if ($conn->query($sql1))
            {
                echo "refresh page" ;
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
   echo "name team should not be empty"; }
   ?>