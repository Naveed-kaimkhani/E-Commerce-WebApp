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
    
    <title>Ease-ucation | Upload </title>

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

    <div class="studentPersonalDeatailsBg">
        
        <div class="row">
            <div class="col-sm-1"></div>
                <div class="col-sm-7 m-auto"><br>
                    <div class="card" style="margin-right: 60px;">
                        <div class="card-header" style="background-color: rgb(24, 59, 122);">
                            <h1 class = "text-white text-center" > Upload Study Material </h1>
                        </div>
            
                        <form action="#" method="POST"  enctype="multipart/form-data" >
                            <div class="from-group"><br>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Upload file</label>
                                    <input type="file" name="notes" style="padding: 15px;" class="form-control"  id="formFileMultiple" multiple>
                                </div>

                                <label style="margin-top: 8px;" class="form-label">Uploading file type</label>
                                <select name="type" id="" class = "form-control" required     value = "">
                                    <option value="" disabled selected> Type Of File </option>
                                    <option value="Notes" > Notes </option>
                                    <option value="PowerPoint" > Powerpoint Presentations</option>
                                    <option value="PastPapers" > Past Papers </option>
                                    </select>

                                <label for="" class = "lb" style="color: rgb(24, 59, 122);">Subject </label>
                                <input style="padding: 15px;" type="text" name="subject" id="" class = "form-control" required >

                                <label class="form-label" style="margin-top: 20px;">Study Material of which Semester</label>
                                <select name="semester" id="" class = "form-control" required     value = "<?php if(isset($error)) { echo $dept;} ?>">
                                        <option value="" disabled selected> Semester </option>
                                        <option value="1" > 1st - Semester </option>
                                        <option value="2" > 2nd - Semester</option>
                                        <option value="3" > 3rd - Semester </option>
                                        <option value="4" > 4th - Semester </option>
                                        <option value="5" > 5th - Semester</option>
                                        <option value="6" > 6th - Semester </option>
                                        <option value="7" > 7th - Semester </option>
                                        <option value="8" > 8th - Semester </option>
                                        </select> <br>
            
                                <button name="submit" class="button-header btn">Upload</button>
            
                                <div class = "reg" style="margin-top: 15px;"> <p><b>Want to see <a href="studyMaterial.php" style="color: rgb(255, 154, 117);">  Uploaded</a> Study Material ?</b>  </p> 
                                
                            </div>         
                        </form>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        
    </div>

    <?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $notes = $_FILES['notes']['name'];
        $notes_type = $_FILES['notes']['type'];
        $notes_temp_loc = $_FILES['notes']['tmp_name'];
        $notes_store = 'notes/'.$notes;

        move_uploaded_file($notes_temp_loc,$notes_store);

        //Other column values
        $type = $_POST['type'];
        $subject = $_POST['subject'];
        $semester = $_POST['semester'];
        $dou = date('Y-m-d');

        $sql = "INSERT INTO notes values('','$notes','$type','$subject','$semester','$dou','$email')";

        $query =  mysqli_query($con,$sql);

        if($query){
            ?>
                <script>
                    window.alert('Notes Successfully Uploaded.');
                </script>
            <?php
        }


    }


    ?>


</body>
</html>