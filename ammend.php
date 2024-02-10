<?php
include 'connection.php';

//gather id u collected
$pid = $_GET['prodId'];

$query="SELECT * FROM product WHERE id='$pid'";

//run query
$result = mysqli_query($connection, $query);

//select row 
$row = mysqli_fetch_assoc($result);

?>

<form method="post" action="./update.php">
    <fieldset>
        <legend>Enter New Product Details</legend>
        
        <input type="hidden" name="productid" value="<?php echo $row['id'] ?>" /></br></br>
        
        <label class="align" for="productname">Product Name:</br></label>
        <input type="text" name="productname"  value="<?php echo $row['title'] ?>" /></br></br>

        <label class="align" for="date">Date:</br></label>
        <input type="text" name="date"  value="<?php echo $row['date'] ?>" /> </br></br>

        <label class="align" for="img">Image Filename:</label></br>
        <input type="text" name="img"  value="<?php echo $row['image'] ?>" /></br></br>

        <input type="submit" name="subtxt" value="submit"> 
        <input  type="reset" name="cleartxt" value="clear" >
    </fieldset>
    
</form>

