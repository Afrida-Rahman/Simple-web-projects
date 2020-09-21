<?php

$conn = mysqli_connect("localhost", "root", "", "uploadFile");

if($conn) {

 echo "connected";
 echo "<br>";
}
 if(isset($_POST['uploadfilesub'])) {
  $filename = $_FILES['uploadfile']['name'];
  $filetmpname = $_FILES['uploadfile']['tmp_name'];
  $folder = 'imagesuploadedf/';
  move_uploaded_file($filetmpname, $folder.$filename);
 $sql = "INSERT INTO `uploadedimage` (`imagename`)  VALUES ('$filename')";
 $qry = mysqli_query($conn,  $sql);
 if( $qry) {
  echo "image uploaded";

 }
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="try1.php" method="post" enctype="multipart/form-data" >
 <input type="file" name="uploadfile" />
 <input type="submit" name="uploadfilesub" value="upload" />
</form>

</body>
</html>
