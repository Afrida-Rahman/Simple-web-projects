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
    
    background-image: url("pic.jpg");
    background-repeat:  no-repeat;
    background-size: cover;
    color: #fff;
    
}
ul{
    list-style: none;
    padding: 0px;
    margin:0px;
}
ul li{
    float:left;
    width:210px;
    height:40px;
    background-color: rgba(0, 51, 0,.5);
    text-align: center;
    line-height: 40px;
    font-size: 18px;
    font-family: arial;
    margin-right: 5px;
    cursor: pointer;
    z-index: 1000;
    position: relative;
}
ul li:hover{
    background-color:rgba(0, 26, 51,.8);
}
ul li a{
    text-decoration: none;
    color: white;
    display: block;
    
}

ul li a:hover{
    background-color:rgba(0, 26, 51,.8);
}
ul li ul li{
    display: none;
}
ul li:hover ul li{
    display:block;
}

.cont{
    width:95%;
    height:800px;
    text-align: left;
    background-color:rgba(0,128,0,.2);
    border-radius:4px;
    margin:0 auto;
    padding-left: 15px;
    padding-top: 5px;
    padding-right: 10px;
    
}
ul li ul li a{
	 background-color: rgba(0,128,0,.3);
	 
}
h3{
    color:#2ECC71;
}

h1 {
    color: white;
    text-align: center;
}

</style>
</head>
<body>
    <div class="cont">
        <div class="header">
            <h1 class="h"><b>Historical places</b></h1><br>
        </div>
		
		
        <div class="content">
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
             <marquee scrollamount="3" direction="left" behavior="scroll"><p><h2>Welcome <strong><?php echo $_SESSION['username']; ?>!!</strong></h2></p></marquee><br>
             

             <?php endif ?>
			  
	
	<ul>
        <li><a  href="index.php">  Home </a></li>  
        <li> Introduction
			<ul>
				<li><a href = "Ahsan-manjil.php">Ahsan Manzil</a></li>
				<li><a href = "lal.php">Lalbagh-Fort</a></li>
				<li><a href = "car.php">Curzon Hall</a></li>
				<li><a href = "Mura.php">Kotila Mura</a></li>
				<li><a href = "gour.php">The Gour Gobinda Fort</a></li>
				<li><a href = "Mainamati.php">Mainamati</a></li>
				<li><a href = "Mahasthangarh.php">Mahasthangarh</a></li>
				<li><a href = "paharpur.php">paharpur</a></li>
				<li><a href = "Shat.php">Shat Gambuj Mosque </a></li>
			</ul>
        </li>
        <li>History
            <ul>
				<li><a href = "Ahsan-manjil history.php">Ahsan Manzil</a></li>
				<li><a href = "lal_history.php">Lalbagh-Fort</a></li>
				<li><a href = "car_history.php">Curzon Hall</a></li>
				<li><a href = "Mura_history.php">Kotila Mura</a></li>
				<li><a href = "gour_history.php">The Gour Gobinda Fort</a></li>
				<li><a href = "Maina_history.php">Mainamati</a></li>
				<li><a href = "Maha_history.php">Mahasthangarh</a></li>
				<li><a href = "paha_history.php">paharpur</a></li>
				<li><a href = "shat_history.php">Shat Gambuj Mosque </a></li>
			</ul>
				
        </li>
      
		<li><a href ="map.php"> Map</a></li>
		<li><a href ="new.php">Feedback</a></li>
    </ul></br></br></br></br></br></br></br></br></br></br>
			<marquee>
			 <img src ="images/Ahsan-Manzil.jpg" width="450" border="2"/>
			 <img src ="images/Curzon-Hall.jpg" width="520" border="2"/>
			 <img src ="images/Lalbagh-Fort.jpg" width="438" border="2"/>
			 <img src ="images/mahasthan.jpg" width="460" border="2"/>
			 <img src ="images/kotilamura.jpg" width="459" border="2"/>
			 </marquee><br><br></br></br></br></br>

		 <p><center><a href="index.php?logout='1' "><h2> Logout</h2> </a></center></p>					
							
	  </div>
    </div>
</body>
</html>