<?php include('server.php');
//if user is not signed in,they shall not pass..
if (empty($_SESSION['username'])){
    header('location: login.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>Home page</title>
     <!--   <link rel="stylesheet" type="text/css" href="test.css"/>-->
<style>
body{
 padding: 0;
 margin: 0;
 background-image: url("leaf.jpeg");
 background-repeat: no-repeat;
 background-size: cover;
 color:black;
}
.menu ul{
list-style: none;
margin:0px;
}
.menu ul li{
width:210px;
height: 35px;
background-color:rgba(18, 96, 23,.6);
text-align: center;
font-size: 18px;
font-family: arial;
cursor: pointer;
z-index: 1000;
border-top: 1px solid black;
position: relative;
padding: 12px 17px;
border-radius: 30px 30px 30px 30px;
}
.menu ul li a{
text-decoration: none;
color: white;
}

.menu ul li:hover{
 background-color:rgba(0, 26, 51,.8);
}

.menu ul li a:hover{
 background-color:rgba(0, 26, 51,.8);
}
.menu ul li ul li{
 display: none;
}
.menu ul li:hover ul li{
 display:block;
}


.menu ul li ul li a{
background-color: rgba(0,128,0,.3);

}
h3{
 color:black;
}

h1 {
  font-size: 240%;
 color: black;
 text-align: center;
}

</style>
</head>
<body>

        <div class="header">
            <h1 class="h"><b>Agriculture Disease Management</b></h1><br>
        </div>

            <?php if(isset($_SESSION['success'])): ?>
                 <div class="error_success">
                     <h3>
                        <?php
                              echo $_SESSION['success'];
                              unset ($_SESSION['success']);
                        ?>
                     </h3>
                 </div>
             <?php endif ?>

             <?php if (isset($_SESSION["username"])): ?>
             <marquee scrollamount="4" direction="left" behavior="alternate"><p><h2>Welcome <strong><?php echo $_SESSION['username']; ?>!!</strong></h2></p></marquee><br>


             <?php endif ?>

             <div class="menu">
                   <ul>
                         <li><a  href="index.php">  Home </a></li><br>
                         <li> <a href="intro.php">Introduction</a></li><br>

                         <li><a href ="c1.php">Upload</a></li><br>
                         <li><a href="index.php?logout='1' ">Logout</a></li><br>
                   </ul>
            </div>
</body>
</html>
