<?php include('server.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>Sign up page</title>
        <link rel="stylesheet" type="text/css" href="style signup.css"/>
</head>
<body>
    <div class="container">
		<center><h1><b>Registration Form</b></h1></center>
         <form method="post" action="register.php">
             <!--display validation errors here-->
             <?php include('errors.php'); ?>
             <div class="form-input">
                 <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
             </div>    
             <div class="form-input">
                 <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
             </div>
             <div class="form-input">
                 <input type="password" name="password_1" placeholder="Password">
             </div>   
             <div class="form-input">
                 <input type="password" name="password_2" placeholder="Confirm Password">
             </div>   
             <input type="submit" name="register" value="Register" class="btn-login">  
             </br>
             Already a member?<a href="login.php" ><u> Sign in</u></a>   
         </form>
    </div>
</body>
</html>	   