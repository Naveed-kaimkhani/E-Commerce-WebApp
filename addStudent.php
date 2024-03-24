<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            .lbutton{
        margin : 10px;
    }
   
   
   body{
       background :whitesmoke;
   }
  
   .card{
       box-shadow : 0px 1px 36px 5px rgba(0,0,0,0.28);
       padding : 30px;
       border-radius : 5px;
   }
   .errmsg{
    margin : 2px auto;
    border-radius : 5px;
    border : 1px solid red;
    background: pink;
    text-align: left;
    color : brown;
    padding : 1px;
    margin-left : 10px;
    margin-top : 30px;
   }
   .successmsg{
    margin : 5px auto;
    border-radius : 5px;
    border : 5px solid white;
    background: blueviolet;
    text-align: left;
    color : white;
    font-size : larger;
    font-weight : bolder;
    padding : 10px;
  margin-left : 10px;
  margin-top : 100px;
   }

   .reg{
       margin-top : 20px;
       margin-bottom : 20px;
       margin-left : 20px;
   }
  .lb{
      margin-left : 10px;
      font-family : 'cursive';
  }
 
  .out{
      padding-left : 1000px;
  }
  .abc{
      margin-top: 20px;;
  }
  .abcd{
      margin-bottom: 20px;;
  }

  .accDiv
  {
      background-image: url(../img/d.jpg);
      background-size: 100% 100%;
      background-repeat: no-repeat;
      height: 600px;


  }
 .a{
     margin-left: 800px;
 }
 .b{
     margin-left: 30px;
 }
 .c{
    margin-left: 30px;
}

a:hover{
    text-decoration: none;
    color: grey;
}

b:hover{
    text-decoration: none;
    color: grey;
}

c:hover{
    text-decoration: none;
    color: grey;
}
.x{
    margin-top: 200px;
}
.s1button{
    margin-top: 20px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    border-radius: 20px;
}

.bgimg{
    background-image: url(../img/i.jpg);
    background-size: 100% 100%;
    background-attachment: fixed;
    width: 100%;
    height: 660px;
}
.y{
    width : 100%;
    /* margin-right: 200px;
    margin-left: 200px; */
}

.z{
    margin-top: 60px;
}
.s2button{
    margin-top: 20px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    border-radius: 20px;
}

.loginBg {
    background-image: url(assets/img/adminBG.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 600px;
}

    </style>

    <title>Ease-ucation | Add Student</title>
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
                                <a href=""  class="navbar-brand font-weight-bold">
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
                                            <li class="active" ><a href="adminPanel.php">Student Data</a></li>
                                            <li class="active" ><a href="notesDisplay.php">Notes Data</a></li>
                                            <li class="active" ><a href="contactDisplay.php">Contact Data</a></li>
                                            <!-- Button -->
                                            <li class="button-header margin-left "><a href="loginAdmin.php" class="btn"> Log Out</a></li>
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

    <?php
 if(isset($_POST['registration'])){
     $full_name = $_POST['full_name'];
     $phone = $_POST['phone'];
     $department = $_POST['department'];
     $year = $_POST['year'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $dor = date('Y-m-d');

     if(strlen($full_name)<3){
        $error[]= ' Please enter full name using 3 characters atleast!';
    }

    if(strlen($full_name)>50){
       $error[]= ' Full name can not be more than 50 characters long!';
    }
    if(!preg_match("/^[A-Za-z _]*[A-Za-z _]+[A-Za-z _]*$/",$full_name)){
        $error[] = 'Invalid entry full name. Please enter letters without any digit or special symbols';
    }  

     if(strlen($phone) < 11){
         $error[] = ' Use 11 digit phone number';
     }

     if(strlen($phone) > 12){
         $error[] = ' Use 11 digit phone number';
     }

     if(!preg_match("/^[0-9]*$/", $phone)){
         $error[] = ' In phone number field, only digits are allowed! ';
     }
     
    if(strlen($email) > 50){
        $error[] = 'Email can not be more than 50 characters long!';
    }
    if(strlen($password) < 6){
        $error[] = 'Password can not be less than 6 characters!';
    }
    if(strlen($password) > 51){
        $error[] = 'Password can not be more than 50 characters!';
    }

    $sql = " select * from student where email = '$email';";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res) > 0){
        $error[] = ' This email has been used already!';
    }

    if(!isset($error)){
        $sql2 = "INSERT INTO student values('','$full_name','$department','$year','$phone', '$dor','$email', '$password')";
        $result = mysqli_query($con,$sql2);

        if($result){
            $done = 2;
        }
         else{
             $error[] = 'Failed : Something went wrong';
         }
    }
 }
 ?>
 <div class="col-sm-3">
  <?php
  if(isset($error)){
      foreach($error as $error){
          echo '<p class= "errmsg">&#x26A0;'.$error.'</p>';
      }
  }
  ?>
 </div>
 <?php
 if(isset($done)){
 ?>
 <script>
    window.alert('Student added successfully!');
 </script>
 <div class="successmsg" >
 <span style = "font-size:100px;">&#9989;</span>
 Student SUCCESSFULLY ADDED! &nbsp; &nbsp; &nbsp;
 <br> <br>
 <a href="adminPanel.php" style = "color:#fff"> Back to Admin Panel...</a>
 <br>
 <br>
 </div>
 <?php
 
 } else {
 ?>


    <div class="row loginBg">
        <div class="col-sm-4" style="margin-left: 450px;">
            <form method = "POST">
            <br> <br>
                    <div class="card">
                      <div class="card-header" style="background-color: rgb(24, 59, 122);">
                       <h1 class = "text-white text-center"> Add Student Form </h1>
                       </div>
      <br>
                     <input style="padding: 20px; " type="text" name="full_name" id="" class = "form-control" placeholder = "Full Name" required value = "<?php if(isset($error)) { echo $full_name;} ?>"> <br>
  
                     <input style="padding: 20px;" type="number" name="phone" id="" class ="form-control" placeholder = "Phone Number" required value = "<?php if(isset($error)) { echo $phone;} ?>"> <br>
                     
                    <select name="department" id="" class = "form-control" required value = "<?php if(isset($error)) { echo $dept;} ?>">
                    <option value="" disabled selected> Department </option>
                    <option value="Computer System Engineering" > Computer System Engineering </option>
                    <option value="Software Engineering" > Software Engineering </option>
                    <option value="Mechanical Engineering" > Mechanical Engineering </option>
                    <option value="Electrical Engineering" > Electrical Engineering </option>
                    <option value="Biomedical Engineering" > Biomedical Engineering </option>
                    <option value="Electronics Engineering" > Electronics Engineering </option>
                    <option value="Telecommunication Engineering" > Telecommunication Engineering </option>
                    <option value="Textile Engineering" > Textile Engineering </option>
                    </select>
                    <br>
  
                    <select name="year" id="" class = "form-control" required value = "<?php if(isset($error)) { echo $batch;} ?>">
                    <option value="" disabled selected> Year </option>
                    <option value="1" > 1st - Year </option>
                    <option value="2" > 2nd - Year </option>
                    <option value="3" > 3rd - Year </option>
                    <option value="4" > 4th - Year </option>
                    </select>
                        <br>
  
                   
                    <input style="padding: 20px;" type="email" name="email" id="" class ="form-control" placeholder = "Email" required value = "<?php if(isset($error)) { echo $email;} ?>"> <br>
  
                    <input style="padding: 20px;" type="password" name="password" id="" class ="form-control" placeholder = "Password" required> <br>
  
                     <button type = "submit" name = "registration" class = "button-header btn"> SUBMIT
                    </button>
                    <?php } ?>
            </form>
  
   </div>
        </div>
</body>
</html>