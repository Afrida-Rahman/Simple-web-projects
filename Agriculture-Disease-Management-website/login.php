<?php include('server.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>login page</title>
        <!--<link rel="stylesheet" type="text/css" href="style.css"/>-->
				<style>
				body{
				    margin: 0 auto;
				    background-image: url("lock.png");
				    background-repeat:  no-repeat;
				    background-size: 100% 720px;
				    color:#fff
				}
				.container{
				    width:450px;
				    height:450px;
				    text-align: center;
				    background-color:rgba(115, 128, 142,.4);
						background-position:50px 100px;
				    border-radius:4px;
						margin-left:10%;
				    margin-top:70px;
				}

				input[type="text"],input[type="password"]{
				    height:40px;
				    width:300px;
				    font-size:18px;
				    background-color: #fff;
				    padding-left:40px;
				    border-radius: 5px;
				    border:none;

				    margin-bottom:20px;
				}
				.error{
						width:80%;
						height:65px;
						margin:0 auto;
						border:2px solid #660066;
						color:black;
						background-color:#b2cbe8;
						border-radius:5px;
						text-align:left;
						padding-left:10px;
						padding-top:none;
						padding-bottom:15px;
						margin-bottom: 15px;
				}
				.form-input::before{
				    content:"\f007";
				    position:absolute;
				    padding-left: 5px;
				    color:#9B59B6;

				    font-size:35px;
				}
				.form-input:nth-child(2)::before{
				    content:"\f023";
				}
				.btn-login{
						padding:12px 17px;
						cursor:pointer;
						color:#fff;
						border-radius: 4px;
						border:  none;
						background-color: rgb(59, 71, 84);
						border-bottom:4px black;
						margin-bottom: 20px;
				}
				a{
						color:black;
				}
				</style>
</head>
<body>
    <div class="container">
	<br><center><h1><b>Registration Form</b></h1></center><br>
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
