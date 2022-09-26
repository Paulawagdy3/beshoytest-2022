

<?php
$sql = "SELECT * from chat WHERE idteam=".$idmember;
$resu = $con-> query($sql);
                            
    if ($resu-> num_rows > 0) 
        {
            while ($row = $resu-> fetch_assoc()) 
            {
                echo"    
                    <li>
                        <div>
                            <a>". $row["message1"] ."</a><br>
                            <a>". $row["from1"] ."</a><br>
                            <a>". $row["created"] ."</a>
                        </div>
                    </li>"
                ;
            }
        }