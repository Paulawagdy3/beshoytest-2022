<!DOCTYPE html>
  <html lang="en">

    <head>
        <meta charset="UT-8">
        <title>web login</title><!--/**/-->
        <link rel="stylesheet" href="../css/login.css"><!--css page-->
    </head>
    
    <body>
      <div class="page">
        <div class="img">
          <img src="../img/undraw_remotely_2j6y.svg">
        </div>
        <div class="card">
        <!--card-->
          <form class="wrapper" method="post">
            <!--title card-->
              <div class="title">
                log in
              </div>
            <!--input card-->
            <div class="form"   action="" method="POST"> 
              <!--Email Address--> 
              <div class="inputfield">
                <label>Email Address</label>
                <input type="text" name="user" class="input">
              </div>  
              <!--Password-->
              <div class="inputfield">
                <label>Password</label>
                <input type="password" name="pass" class="input">
              </div>  
              <!--checkbox-->
              <div class="inputfield terms" >
                <label class="check">
                  <input type="checkbox" name="remember" >
                  <span class="checkmark"></span>
                </label>
                <p>Remmber me</p>
              </div>
              <!--submit--> 
              <div class="inputfield">
                <button type="submit" name="submit" class="btn">Login</button>
              </div>
            </div>
            <div class="Registration"><a style="text-decoration: none;" href="Registration.php">make email</a></div>
            <!--backend page-->
            <div class="error">
              <?php include ("Login,Data.php") ;?>
            </div>
          </form>
        </div>
      </div>
    </body>
  </html>


