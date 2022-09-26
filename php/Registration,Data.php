<?php
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "login";
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $cpassword = filter_input(INPUT_POST, 'cpassword');
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $Gender = filter_input(INPUT_POST, 'Gender');
    $Phone = filter_input(INPUT_POST, 'Phone');
    $checkbox = filter_input(INPUT_POST, 'checkbox');
    $img = filter_input(INPUT_POST, 'img');

    if (!empty($firstname))
    {  
        if (!empty($lastname))
        {
            if (!empty($password))
            {  
                if ($password==$cpassword)
                { 
                    if (!empty($Gender))
                    { 
                        if (!empty($username))
                        {  
                            if (!empty($Phone))
                            {
                                if (!empty($checkbox))
                                {
                                                
                                    if (mysqli_connect_error())
                                    {
                                        die('Connect Error ('. mysqli_connect_errno() .') '
                                        . mysqli_connect_error());
                                    }
                                    else
                                    {
                                        $sql = "INSERT INTO loginform (username, password,firstname,lastname,Gender,Phone,checkbox)
                                        values ('$username','$password','$firstname','$lastname','$Gender','$Phone','$checkbox')";
                                                        
                                        if ($conn->query($sql))
                                        {
                                            header('location:login.php') ;
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
                                    echo "checkbox should not be empty";
                                    die();
                                }
                            }
                            else
                            {
                                echo "Phone should not be empty";
                                die();
                            }
                        }
                        else
                        {
                            echo "username should not be empty";
                            die();
                        }
                    }

                    else
                    {
                        echo "Gender should not be empty";
                        die();
                    }
                }
                else
                {
                    echo "password not same";
                    die();
                }    
            }
            else
            {
                echo "password should not be empty";
                die();
            }
        }
        else
        {
            echo "lastname should not be empty";
            die();
        }
    }
    else
    {
        echo "firstname should not be empty";
        die();
    }
?>