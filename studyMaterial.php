<?php 
session_start();
include 'conn.php';
if(!isset($_SESSION['login'])){
    header('location:loginStudent.php');
}
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ease-ucation | Study Material </title>

    <!--FavIcon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="css/all.min.css" rel="stylesheet"> 


    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .fnotes{
            margin-top: 80px;
        }
        .fnotes h2{
            font-size: 50px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div style="background-color: rgb(24, 59, 122);">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo" style="padding-left: 60px;">
                                <a href="index.php"  class="navbar-brand font-weight-bold">
                                    <span> <img style="height: 35px; width: 40px;" src="assets/img/logo/logo.png" alt=""></span>
                                    <b><span style="color: rgb(255, 255, 255); font-size: 20px;"> Ease-ucation </span></b>
                                 </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li class="active" ><a href="accountStudent.php">My Profile</a></li>
                                            <li><a href="studyMaterial.php">Study Material</a></li>
                                            <li><a href="uploadNotes.php">Upload</a></li>
                                            <!-- Button -->
                                            <li class="button-header"><a href="logoutStudent.php" class="btn">Log Out</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center fnotes">
            <h2> Study Material </h2>
        <br> <br>

        <table class = "table table-stripped table-hover table-bordered bg-light" id = "myTable">
<tr class = "bg-dark text-white text-center">
      <th> File Name</th>
      <th> Type </th>
      <th> Semester </th>
      <th> Subject </th>
      <th> Author </th>
      <th> Preview </th>
      
</tr>

     
        <?php

       $q = "select * from notes";

       $query = mysqli_query($con,$q);
       //$x = 0;
       while($res = mysqli_fetch_array($query)){
      // $x = $x + 1;
       ?>


<tr  class = "text-center">
      <!-- <td> <?php echo $x ?> </td> -->
      <td> <?php echo $res['name']; ?> </td>
      <td> <?php echo $res['type']; ?> </td>
      <td> <?php
      if($res['semester']==1){
        echo '1st';
      }
      elseif($res['semester']==2){
        echo '2nd';
      }
      elseif($res['semester']==3){
        echo '3rd';
      }
      else{
        echo $res['semester'].'th';
      }
      ?> </td>
      <td> <?php echo $res['subject']; ?> </td>
      <td> <?php 
         if($res['email']==$email){
            echo 'Shared by me';
         }
         else{
            echo 'Shared by others';
         }
      ?> </td>
      <td><a href="notes/<?php echo $res['name'];?>"><button class="btn">Preview</button></a> </td>
</tr>

       <?php
       }
       ?>
</table>
            


        </div>
    </div>


    


</body>
</html>