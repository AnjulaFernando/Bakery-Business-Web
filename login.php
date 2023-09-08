
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css" />
    <title>login page</title>
    <!--font awesome cnd link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!--custom css file-->
<link rel="stylesheet"  href="styleRL.css">

</head>
<body>

<div class="login-Container">
    <div class="login-header">
        <h2>Login</h2>
    </div>
    <form action="login.php" method="POST" class="form" id="form">
        <div class="form-control">
            <lable>Username</lable>
            <input type="text" placeholder="Username" name="txtuname" required>
           <!-- <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message </small>-->
        </div>

        <div class="form-control">
            <lable>Password</lable>
            <input type="text" placeholder="enter password" name="txtpassword" id="password" required>
            <!--<i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message </small>-->
        </div>


        <p1 style="color:black;">
            <?php
            if(isset($_POST["btnsubmit"])) //check whether if the user has clicked the button(returns if the value is there or not)
            {
            $username=$_POST["txtuname"];
            $password=$_POST["txtpassword"];
            
            $valid=false;
            
            if(($username=="test2000")&&($password=="1234")){
            
              $valid=true;
            }
            else{
              $valid=false;
            }
            if($valid){
              $_SESSION["Username"]=$username; //create a session
              header('Location:order.html'); //if the uname pwd correc,redirects to the order.html
            }
            else{
              echo "Please enter the correct email and password";
            }
            
            }
            
            ?>
       </p1>
       
       <button type="submit" name="btnsubmit">Submit</button>
      
       <p>Don't have an Account? <a href="register.html">Creat new</a></p>
       <p>Go back to Home  <a href="home.html">Home</a></p></p>
    </form>
</div>
</body>
</html>