<!DOCTYPE html>
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
	
	<h1 style="font-size: 80px; color: dimgray; margin-top: 20%;">PRODUCT DETAILS</h1>
    <?php
//Make connection to database
include 'connection.php';
//run query to select all records from customer table
$query="SELECT * FROM produc";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
    if ($row['title'] =="vinyl" || $row['title'] =="borntodie" ) {
        echo '<div class="detailright">'.'ID    -'.$row['id'].'<br>'.'TITLE   -'.$row['title'].'<br>'.'DESCRIPTION    -'.$row['description'].'<br>'.'TYPE     -'.$row['type'].'<br>'.'DATE    -'.$row['date'].'</div>'.
' <img class="imagesleft" src="./images/'.$row['image'].'"height="70" />';
      } else {
        echo '<div class="detailleft">'.'ID   -'.$row['id'].'<br>'.'TITLE    -'.$row['title'].'<br>'.'DESCRIPTION      -'.$row['description'].'<br>'.'TYPE    -'.$row['type'].'<br>'.'DATE    -'.$row['date'].'</div>'.
' <img class="imagesright" src="./images/'.$row['image'].'"height="70" />';
      }

}
?>
    
	

	
</body>
</html>

