<?php  
    $conn = mysqli_connect("localhost:3307", "root", "root", "login");
    if(isset($_POST["submit"]))
    {  
        if(!empty($_POST['user']) && !empty($_POST['pass'])) 
        {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];    
        $query=("SELECT * FROM loginform WHERE username='$user' AND password='$pass'");
        $numrows=mysqli_query($conn,$query);                
            
            if(mysqli_num_rows($numrows)==1)  
            {  while ($row = $numrows-> fetch_assoc()) {
            header('location:home1.php?id=' .$row["id"].'') ;}
            } 
            else 
            {  
                echo "Invalid username or password!";  
            }   
        } 
        else
        {  
            echo "All fields are required!";  
        }  
    }  
?>