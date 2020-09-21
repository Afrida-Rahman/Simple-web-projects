<?php include('server.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>login page</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="container">
	<center><h1><b>Registration Form</b></h1></center>
         <form method="post" action="login.php">
             <!--display validation errors here-->
             <?php include('errors.php'); ?>

             <div class="form-input">
                 <input type="text" name="username" placeholder="Enter Username">
             </div>    
             <div class="form-input">
                 <input type="password" name="password" placeholder="Enter Password">
             </div>
             <input type="submit" name="login" value="LOGIN" class="btn-login">  
         </br>Not a member yet?<a href="register.php"> Sign up</a>
         </form>
    </div>
</body>
</html>	   