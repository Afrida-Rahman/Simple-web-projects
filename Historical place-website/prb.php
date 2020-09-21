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
        <link rel="stylesheet" type="text/css" href="test.css"/>
    
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
			  <marquee>
			 <img src ="images/Ahsan-Manzil.jpg" width="450" border="2"/>
			 <img src ="images/Curzon-Hall.jpg" width="520" border="2"/>
			 <img src ="images/american.jpg" width="365" border="2"/>
			 <img src ="images/Lalbagh-Fort.jpg" width="438" border="2"/>
			 <img src ="images/mahasthan.jpg" width="460" border="2"/>
			 <img src ="images/kotilamura.jpg" width="459" border="2"/>
			 </marquee><br><br>
		
			
			  
							<a href = "dam.php">Ahsan Manzil</a><br>
							<a href = "lal.php">Lalbagh-Fort</a><br>
							<a href = "car.php">Curzon Hall</a><br>
							<a href = "am.php">American Church</a><br>
							<a href = "gour.php">The Gour Gobinda Fort</a><br>
							<a href = "Mura.php">Kotila Mura</a><br>
							<a href = "Mainamati.php">Mainamati</a><br>
							<a href = "Mahasthangarh.php">Mahasthangarh</a><br>
							<a href = "paharpur.php">paharpur</a><br>
							<a href = "Shat.php">Shat Gambuj Mosque </a><br><br>

		 <p><a href="prb.php?logout='1' "><h2> Logout</h2> </a></p>					
							
	  </div>
    </div>
</body>
</html>