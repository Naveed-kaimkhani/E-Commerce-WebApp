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
    background: rgba(113, 12, 228, 0.631);
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
      margin-top: 20px;
  }
  .abcd{
      margin-bottom: 20px;
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
    background-image: url(assets/img/studentLoginBg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 600px;
}

    </style>

    <title>Ease-ucation | Student Login</title>
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
                                            <li class="active" ><a href="index.php">Home</a></li>
                                            <!-- Button -->
                                            <li class="button-header margin-left "><a href="registerStudent.php" class="btn">Join</a></li>
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


    <div class="row loginBg" >
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4 m-auto">
       
        <br>
                         <div class="card">
                           <div class="card-header"  style="background-color: rgb(24, 59, 122);">
                            <h1 class = "text-white text-center"> Student Login </h1>
                            </div>
       
                 <form action="loginprocessStudent.php" method="POST">
                 <div class="from-group">
                 <br>
                           
       <br>
                          <label for="" class = "lb" style="color: rgb(24, 59, 122);">Email : </label>
                          <input style="padding: 20px;" type="text" name="email" id="" class = "form-control" required > <br>
    
                          <label for="" class = "lb" style="color: rgb(24, 59, 122);">Password : </label>
                          <input style="padding: 20px;" type="password" name="password" id="" class ="form-control" required> <br>
       
                          <button class="button-header btn">Log in</button>
       
                         <div style="margin-top: 15px;">  <b class = "reg" style="color: rgb(24, 59, 122);">Haven't Registered yet ? 
                            <a href="registerStudent.php" style="color: rgb(255, 154, 117);">  Register Now!</a></b>
                        </div>
                         
                         </div>           
                 </form>
                 </div>
        </div>
        <div class="col-sm-4">
        </div>
        </div>
</body>
</html>