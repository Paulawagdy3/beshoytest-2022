<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UT-8">
        <title>wrb log</title>
        <link rel="stylesheet" href="../css/Registration.css">
    </head>
    
    <body>
        <div class="page">
            <div class="img">
            <img src="https://via.placeholder.com/700" >
            </div>
        <div class="card">
            <form method="post" action="" class="wrapper">
                <div class="title">
                    Registration Form
                </div>
                <div class="form">
                <div class="inputfield">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="input">
                </div>  
                    <div class="inputfield">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="input">
                </div>  
                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" name="password" class="input"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>  
                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" name="cpassword" class="input">
                </div> 
                    <div class="inputfield">
                    <label  >Gender</label>
                    <div  class="custom_select">
                        <select type="text" name="Gender" class="Gender">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div> 
                    <div class="inputfield">
                    <label >Email Address</label>
                    <input type="email" name="username" class="input">
                </div> 
                <div class="inputfield">
                    <label >Phone Number</label>
                    <input type="number" name="Phone" class="input">
                </div> 
                <div class="inputfield">
                    <label >Photo</label>
                    <input type="file" name="img" class="input">
                </div> 
                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox" name="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div> 
                <div class="inputfield">
                    <input type="submit" value="Register" name="Register" class="btn">
                </div>
                </div>
                <div class="error">
                    <?php include ("Registration,Data.php") ;?>
                </div>    
            </form>
        </div>
    </body>
</html>

