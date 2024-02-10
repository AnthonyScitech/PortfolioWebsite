<html>
<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=960px">
</head>
<body >
<nav>
		<p>ANTHONY</p>
		<ul>
			<li><a href="home.html">HOME</a></li>
			<li><a href="./biolgraphy.html">BIOGRAPHY</a></li>
			<li><a href="./listing.php">LISTING</a></li>
			<li><a href="./detail.php">DETAIL</a></li>
			<li><a href="./basket.php">BASKET</a></li>
            <li><a href="./insert.php">INSERT</a></li>
		</ul>
	</nav>

    
    <form method="post" action=" ">
	<h1 style="font-size: 80px; color: black; margin-top: 10%; ">INSERT</h1>
    <input type="submit" name="cd" class="buttoninsert" value="ADD CD">   
    <input type="submit" name="vinyl" class="buttoninsert" value="ADD VINYL"> 
    <input type="submit" name="shirt" class="buttoninsert" value="ADD SHIRT">
    <input type="submit" name="borntodie" class="buttoninsert" value="ADD BORNTODIE">
    <input type="submit" name="overthecountry" class="buttoninsert" value="ADD OVERTHECOUNTRY">
    </form>
	

    
</body>
</html>

<?php
//Make connection to database
include 'connection.php';
//(a)Gather from $_POST[]all the data submitted and store in variables
if (isset($_POST['cd'])){

$query = "INSERT INTO product (`title`, `description`, `type`, `date`, `image`) VALUES ( 'cd', 'latest collection', 'music', '20-02-2000', 'cd.jpg')";

 


}

elseif (isset($_POST['vinyl'])){

$query = "INSERT INTO product (`id`, `title`, `description`, `type`, `date`, `image`) VALUES ('vinyl', 'authentic collection', 'music', '20-02-2010', 'vinyl.jpg')";

 


}


elseif (isset($_POST['shirt'])){


$query = "INSERT INTO product ( `title`, `description`, `type`, `date`, `image`) VALUES ( 'shirt', 'oversized shirts', 'clothes', '02/02/2022', 'shirt.jpg')";

 


}

elseif (isset($_POST['borntodie'])){



$query = "INSERT INTO produc ( `title`, `description`, `type`, `date`, `image`) VALUES ( 'borntodie', 'top rated album', 'album', '02/02/2002', 'borntodie.jpg')";

 


}

elseif (isset($_POST['overthecountry'])){



$query = "INSERT INTO produc (`id`, `title`, `description`, `type`, `date`, `image`) VALUES ( 'overthecountry', 'zazzy chill vibe', 'album', '02/02/2012', 'overthecountry.jpg')";

 
}
if(mysqli_query($connection, $query)){

    echo "Record inserted successfully.";


    } else{
    
    echo "ERROR: Could not able to executrere $sql. " . mysqli_error($connection);
    
    }




?>