<?php 
session_start();
include 'conn.php';
if(!isset($_SESSION['login'])){
    header('location:loginStudent.php');
}
$email = $_SESSION["email"];
$query = " select * from student where email = '$email';";
$findresult = mysqli_query($con,$query);
if($res = mysqli_fetch_array($findresult)){
    $full_name = $res['full_name'];
    $year = $res['year'];
    $department = $res['department'];
    $phone = $res['phone'];
    $email = $res['email'];
    $dor = $res['dor'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ease-ucation | My Profile</title>

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
        .fnotes h1{
            font-size: 70px;
            font-weight: bolder;
        }

        .myHeader {
            background-image: url(assets/img/bg.jpg);
            background-repeat: no-repeat;
            height: 490px;
            background-size: cover;
            background-position: center;
            text-align: center;
            width:100vw;
        }

        .studentPersonalDeatailsBg {
            background-image: url(assets/img/studentPersonalDeatailsBg.jpg);
            background-repeat: no-repeat;
            height: 580px;
            background-size: 100%;
        }

        .card {
            box-shadow : 0px 1px 36px 5px rgb(24, 59, 122);
            padding : 30px;
            border-radius : 5px;
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
                                            <li class="active" ><a href="#">My Profile</a></li>
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

    <div class="studentPersonalDeatailsBg">
        <div class="row">
            <div class="col-3" style="margin-left: 80px;"></div>
            <div class="col-5" style="margin-bottom: 80px; margin-top: 80px;" >
            <div class="card-header abc" style="background-color: rgb(24, 59, 122);">
                             <h1 class = "text-white text-center"> Your Personal Details </h1>
                             </div>
        
                             <table class=" table table-stripped table-hover table-bordered abc bg-light">
                                 
                             <tr>
                                 <th>Full Name</th>
                                 <td> <?php echo $full_name; ?> </td>
                             </tr>
        
                             <tr>
                                 <th>Department</th>
                                 <td> <?php echo $department; ?> </td>
                             </tr>
        
                             <tr>
                                 <th>Year</th>
                                 <td> <?php 
                                 if($year==1){
                                    echo '1st Year';
                                 }
                                 else if($year==2){
                                    echo '2nd Year';
                                 }
                                 else if($year==3){
                                    echo '3rd Year';
                                 }
                                 else{
                                    echo 'Final Year';
                                 }
                                 ?> </td>
                             </tr>
        
                             <tr>
                                 <th>Phone Number</th>
                                 <td> <?php echo "0".$phone; ?> </td>
                             </tr>
        
                             <tr>
                                 <th>Email</th>
                                 <td> <?php echo $email; ?> </td>
                             </tr>
                             <tr>
                                 <th>Date of Registration</th>
                                 <td> <?php echo $dor; ?> </td>
                             </tr>
        
                             </table>
            </div>
        </div>
     
    </div>


</body>
</html>