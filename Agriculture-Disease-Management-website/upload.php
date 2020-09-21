<?php

   if(isset($_POST['uploadfilesub']))
   {
        $filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        $folder = 'imagesuploadedf/';
        move_uploaded_file($filetmpname, $folder.$filename);
        $sql = "INSERT INTO `uploadedimage` (`imagename`)  VALUES ('$filename')";
   }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <!--<link rel="stylesheet" type="text/css" href="style1.css"/>-->
<style>
body{
    margin: 0 auto;
    background-image: url("leaf.jpeg");
    background-repeat:  no-repeat;
    background-size: 100% 720px;
    color: black;
}

.container{
    width:450px;
    height:300px;
    text-align: center;
    background-color: inherit;
    border-radius:4px;
    margin:0 auto;
    margin-top:90px;
}
input[type="text"],input[type="password"]{
    height:38px;
    width:300px;
    font-size:18px;
    margin-bottom:20px;
    background-color: #fff;
    padding-left:40px;
    border-radius: 5px;
    border:none;
}
.form-input::before{
    content:"\f007";
    position:absolute;
    padding-left: 5px;
    color:#9B59B6;
    padding-top:3px;
    font-size:30px;
}
.btn-login{
  width:290px;
  height: 29px;
  background-color:rgba(18, 96, 23,.6);
  font-size: 16px;
  cursor: pointer;
  z-index: 1000;
  border-top: 1px solid black;
  position: relative;
  color: white;
  padding: 12px 17px;
  border-radius: 30px 30px 30px 30px;
}
.btn-login:hover{
 background-color:rgba(0, 26, 51,.7);
}
.pst{
  width:130px;
  height: 35px;
  font-size: 15px;
  background-color: rgba(18, 96, 23,.6);
  color:white;
  border-radius: 20px 20px 20px 20px;
  border-top: 1px solid green;
  cursor: pointer;
  z-index: 1000;
  position: relative;
  text-align: center;
  border-bottom:#004d00;
}
.pst:hover{
  background-color: rgba(0,26,51,.7);
}
a{
    color:#2F4F4F;
}
h3{
  font-size:170%;
}
h2{
  font-size: 220%;
}


</style>
</head>
<body>
  <center><h2>Upload A Photo Of Crop's Disease</h2>
  <h3> For Indentifying The Disease !</h3></center>
    <div class="container">
      <form method="get" action="try1.php" enctype="multipart/form-data">
      	<input type="file" name="uploadfilesub" class="btn-login" ><br><br>

      	<div>
          <h3>Then Click Post !</h3><br>
      	 	 <button type="submit" name="upload" class="pst">POST</button>
      	</div>
      </form>

    </div>
</body>
</html>
