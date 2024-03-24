<?php
session_start();
include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$q = " select * from admin where email = '$email' && password = '$password'";
$res = mysqli_query($con,$q);
$num = mysqli_num_rows($res);
if($num == 1){
    $_SESSION['login'] = "1";
    $_SESSION['email'] = $email;
    
    header('location:adminPanel.php');
}
else{
    header('location:loginAdmin.php');
}
?>                             