<?php
//connect to database
include 'connection.php';
//collect data from form
$id=$_POST['productid'];
$name=$_POST['productname'];
$date=$_POST['date'];
$image=$_POST['img'];


$query="UPDATE product 
SET title='$name', Date='$date', image='$image'
WHERE id='$id'";
//run query
mysqli_query($connection,$query);

//relocate back to main page
header("Location:./basket.php");