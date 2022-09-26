<?php 

    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "login";
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $sql = "SELECT t.id,t.username from table1 as t inner join logtable as l on t.username = l.idtable where l.idpro=";
    $result = $conn-> query($sql);
    if ($result-> num_rows > 0) 
    {
        while ($row = $result-> fetch_assoc()) {
        echo"<p><a >" 
          . '<img  src="https://via.placeholder.com/100">'  .
                "</a> <br> <a href='project.php?id=" .$row["id"]."'' claass='a' >"   . $row["username"] ."</a></p>";
                
        }
    }   
    else
    {
        echo"0 team";
    }
    $conn-> close();
    

?>

