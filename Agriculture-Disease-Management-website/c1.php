<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['uploadfilesub'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `images` WHERE CONCAT(`id`, `image`, `image_text`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `images`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "image_upload");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 2px solid black;
            }
            body{
                margin: 0 auto;
                background-image: url("leaf.jpeg");
                background-attachment: fixed;
                background-repeat:  no-repeat;
                background-size: 100% 720px;
                color: black;
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



        </style>
    </head>
    <body>
      <br>
      <center><h1>Upload A Photo Of Crop's Disease</h1>
      <h2> For Indentifying The Disease !</h2></center>
        <div class="container">
          <center>
            <form action="c1.php" method="post">
            <form method="get" action="c1.php" enctype="multipart/form-data">
            <input type="file" name="uploadfilesub" class="btn-login" ><br><br>
            <div>
                <h2>Then Click Post !</h2><br>
             <button type="submit" name="search" value="Filter"  class="pst">POST</button><br><br>
           </center>
            <table>
                <tr>
                    <th>Id</th>
                    <th>image</th>
                    <th>image_text</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['image'];?></td>
                    <td><?php echo $row['image_text'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>
