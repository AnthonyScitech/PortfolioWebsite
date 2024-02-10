<?php
session_start();
include 'connection.php';


?>
<html>
<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=960px">
</head>
<body style="background: linear-gradient(to bottom, #A9F1DF 1%, #FFBBBB 72%);">
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
	
    <form method="post" action="./basket.php">
	<h1 style="font-size: 80px; color: dimgray; ">LISTING</h1>
    <img class="productleft" src="./images/cd.jpg" width="600" height="604">
    <input type="submit" name="cd" class="buttonleft" value="ADD TO BASKET">   
	<img class="productright" src="./images/vinyl.jpg" width="600" height="604">
    <input type="submit" name="vinyl" class="buttonright" value="ADD TO BASKET"> 
	<img class="productleft" src="./images/shirt.jpg" width="600" height="604">
    <input type="submit" name="shirt" class="buttonleft" value="ADD TO BASKET">
	<img class="productright" src="./images/borntodie.jpg" width="600" height="604">
    <input type="submit" name="borntodie" class="buttonright" value="ADD TO BASKET">
    <img class="productleft" src="./images/overthecountry.jpg" width="600" height="604">
    <input type="submit" name="overthecountry" class="buttonleft" value="ADD TO BASKET">
    
    </form>
    
</body>
</html>