<?php
//Make connection to database
include 'connection.php';

//get id
$productid=$_GET['prodId'];

$query = "DELETE FROM product WHERE id ='$productid'";

 


//(b)Construct INSERT query using variables holding data gathered

    mysqli_query($connection,$query);
    header("location: {$_SERVER['HTTP_REFERER']}");
    

?>