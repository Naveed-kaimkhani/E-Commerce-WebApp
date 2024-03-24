<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM student WHERE id = $id ";

mysqli_query($con, $q);

header('location:adminPanel.php');
?>