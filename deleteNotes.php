<?php

include 'conn.php';

$id = $_GET['id'];

$sql = "SELECT name from notes where id = '$id'";

$query = mysqli_query($con,$sql);

$res = mysqli_fetch_array($query);

$q = " DELETE FROM notes WHERE id = $id ";

mysqli_query($con, $q);

unlink("notes/".$res['name']);

header('location:notesDisplay.php');
?>