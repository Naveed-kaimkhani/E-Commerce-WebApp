<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ease-ucation | Admin Panel </title>

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
            font-size: 60px;
            font-weight: 700;
        }
        .button{
            border-radius: 5px;
            border: none;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right:20px;
            padding-left: 20px;
        }
        .pad{
            margin-left: 200px;
        }
        .loginBg {
        background-image: url(assets/img/adminBG.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 650px;
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
                                            <li class="active" ><a href="#">Student Data</a></li>
                                            <li><a href="notesDisplay.php">Notes Data</a></li>
                                            <li><a href="contactDisplay.php">Contact Data</a></li>
                                            <!-- Button -->
                                            <li class="button-header"><a href="logoutAdmin.php" class="btn">Log Out</a></li>
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


    <div class = "fluid-container loginBg">
<div class = "col-lg-12">
<br>  <br>

<div class="row">
<div class="col-lg-4">
<h1 class = "text-center text-white" style="font-size:40px"> Admin Panel </h1>
<br>
</div>
<div class="col-lg-4">

</div>
<div class="col-lg-4">
<button class="button btn-info pad"><a href="addStudent.php"  class="text-white"><div> ADD STUDENT</div></a></button>
</div>
</div>


<table class = "table table-stripped table-hover table-bordered bg-light" id = "myTable">
<tr class = "bg-dark text-white text-center">
      <th> Full Name </th>
      <th> Department </th>
      <th> Year </th>
      <th> Phone Number </th>
      <th> Email </th>
      <th> Date of Registration </th>
      <th> Delete </th>
</tr>

     
        <?php

        include 'conn.php';

       $q = "select * from student";

       $query = mysqli_query($con,$q);
       while($res = mysqli_fetch_array($query)){
       ?>


<tr  class = "text-center">
      <td> <?php echo $res['full_name'] ?> </td>
      <td> <?php echo $res['department']; ?> </td>
      <td> <?php 
      if($res['year']==1){
        echo "1st Year";
      }
      else if($res['year']==2){
        echo "2nd Year";
      }
      else if($res['year']==3){
        echo "3rd Year";
      }
      else{
        echo "Final Year";
      }
       ?> </td>
      <td> <?php echo $res['phone']; ?> </td>
      <td> <?php echo $res['email']; ?> </td>
      <td> <?php echo $res['dor']; ?> </td>
      <td> <button class = "button btn-danger"> <a href="deleteStudent.php?id=<?php echo $res['id']; ?> "class = "text-white"> Delete </a> </button> </td>
</tr>

       <?php
       }
       ?>
</table>
         
</div>
</div>

   

</body>
</html>