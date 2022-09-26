

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UT-8">
        <title>wrb log</title>
        <link rel="stylesheet" href="css.css">
    </head>
    
    <body>
        <?php
            $host = "localhost:3307";
            $dbusername = "root";
            $dbpassword = "root";
            $dbname = "login0";
            $conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
            error_reporting(0);
            $query="SELECT * FROM `loginform`";
            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            if($total!=0)
            {
                while($result=mysqli_fetch_assoc($data))
                {
                    echo"
                    <a>".$result['username']."</a>
                    <a href='?rn=$result[username]'>delet</a><br>";
                }
            }
        ?>
        <?php
    include("backend-search.php")
?>
    
    </body>
</html>


<?php 

    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "login0";
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $username = filter_input(INPUT_POST, 'username');
    $sql = "SELECT * from loginform";
    $result = $conn-> query($sql);
    
    if ($result-> num_rows > 0) 
    {
        while ($row = $result-> fetch_assoc()) {
        echo"<p><a >" 
          . '<img  src="https://via.placeholder.com/100">'  .
                "</a> <br> <a claass='a'>"   . $row["username"] .
                "</a><a>sdfsdf
                </a><br></p>";
                
    }
        echo"</div>";
    }
    else
    {
        echo"0 team";
    }
    $conn-> close();
    
?>