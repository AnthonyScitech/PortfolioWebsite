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
			<li><a href="basket.php">BASKET</a></li>
            <li><a href="./insert.php">INSERT</a></li>
		</ul>
	</nav>
    <h1 style="font-size: 80px; color: dimgray; margin-top: 10%;">BASKET</h1>
    <!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: orange;}
</style>
</head>
<body>
<?php
//Make connection to database
include 'connection.php';

if (isset($_POST['cd'])){
    $cd='cd';
    $query="SELECT * FROM product WHERE title='cd' ";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//the first name, last name and email for each record
echo'<table style="width:60%" >';
    echo'<th>PRODUCT</th>
    <th>DATE</th> 
    <th>IMAGE</th>
    <th>AMMEND</th>
    <th>DELETE</th>';

    //Use a while loop to iterate through your $result array and display
while ($row=mysqli_fetch_assoc($result)){
    echo '<tr style="height:80px">';
echo '<td style="font-size: 30px; font-family: sans-serif;" >'.$row['title'].'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.$row['date'].'</td>'.'<td>'.
' <img src="./images/'.$row['image'].'"height="300" />'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;" >'.'<a href="./ammend.php?prodId='.$row['id'].'">Amend</a>'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.
 '<a href="./delete.php?prodId='.$row['id'].'">Delete</a>'.'</td>';
 echo '</tr>';
}
echo'</table>';
}

elseif (isset($_POST['vinyl'])){
    $cd='vinyl';
    $query="SELECT * FROM product WHERE title='vinyl'";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//the first name, last name and email for each record
echo'<table style="width:60%" >';
    echo'<th>PRODUCT</th>
    <th>DATE</th> 
    <th>IMAGE</th>
    <th>AMMEND</th>
    <th>DELETE</th>';

    //Use a while loop to iterate through your $result array and display
while ($row=mysqli_fetch_assoc($result)){
    echo '<tr style="height:80px">';
echo '<td style="font-size: 30px; font-family: sans-serif;" >'.$row['title'].'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.$row['date'].'</td>'.'<td>'.
' <img src="./images/'.$row['image'].'"height="300" />'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;" >'.'<a href="./ammend.php?prodId='.$row['id'].'">Amend</a>'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.
 '<a href="./delete.php?prodId='.$row['id'].'">Delete</a>'.'</td>';
 echo '</tr>';
}
echo'</table>';

}
elseif (isset($_POST['shirt'])){
    $cd='shirt';
    $query="SELECT * FROM product WHERE title='shirt'";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//the first name, last name and email for each record
echo'<table style="width:60%" >';
    echo'<th>PRODUCT</th>
    <th>DATE</th> 
    <th>IMAGE</th>
    <th>AMMEND</th>
    <th>DELETE</th>';

    //Use a while loop to iterate through your $result array and display
while ($row=mysqli_fetch_assoc($result)){
    echo '<tr style="height:80px">';
echo '<td style="font-size: 30px; font-family: sans-serif;" >'.$row['title'].'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.$row['date'].'</td>'.'<td>'.
' <img src="./images/'.$row['image'].'"height="300" />'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;" >'.'<a href="./ammend.php?prodId='.$row['id'].'">Amend</a>'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.
 '<a href="./delete.php?prodId='.$row['id'].'">Delete</a>'.'</td>';
 echo '</tr>';
}
echo'</table>';

}
elseif (isset($_POST['borntodie'])){
    $cd='borntodie';
    $query="SELECT * FROM product WHERE title='borntodie' ";

    //store the result of the query in a variable called $result
    $result=mysqli_query($connection, $query);
    
    //the first name, last name and email for each record
    echo'<table style="width:60%" >';
        echo'<th>PRODUCT</th>
        <th>DATE</th> 
        <th>IMAGE</th>
        <th>AMMEND</th>
        <th>DELETE</th>';
    
        //Use a while loop to iterate through your $result array and display
    while ($row=mysqli_fetch_assoc($result)){
        echo '<tr style="height:80px">';
    echo '<td style="font-size: 30px; font-family: sans-serif;" >'.$row['title'].'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.$row['date'].'</td>'.'<td>'.
    ' <img src="./images/'.$row['image'].'"height="300" />'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;" >'.'<a href="./ammend.php?prodId='.$row['id'].'">Amend</a>'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.
     '<a href="./delete.php?prodId='.$row['id'].'">Delete</a>'.'</td>';
     echo '</tr>';
    }
    echo'</table>';

}
elseif (isset($_POST['overthecountry'])){
    $cd='overthecountry';
    $query="SELECT * FROM product WHERE title='overthecountry' ";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//the first name, last name and email for each record
echo'<table style="width:60%" >';
    echo'<th>PRODUCT</th>
    <th>DATE</th> 
    <th>IMAGE</th>
    <th>AMMEND</th>
    <th>DELETE</th>';

    //Use a while loop to iterate through your $result array and display
while ($row=mysqli_fetch_assoc($result)){
    echo '<tr style="height:80px">';
echo '<td style="font-size: 30px; font-family: sans-serif;" >'.$row['title'].'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.$row['date'].'</td>'.'<td>'.
' <img src="./images/'.$row['image'].'"height="300" />'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;" >'.'<a href="./ammend.php?prodId='.$row['id'].'">Amend</a>'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.
 '<a href="./delete.php?prodId='.$row['id'].'">Delete</a>'.'</td>';
 echo '</tr>';
}
echo'</table>';

}

else{
    $query="SELECT * FROM product  ";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//the first name, last name and email for each record
echo'<table style="width:60%" >';
    echo'<th>PRODUCT</th>
    <th>DATE</th> 
    <th>IMAGE</th>
    <th>AMMEND</th>
    <th>DELETE</th>';

    //Use a while loop to iterate through your $result array and display
while ($row=mysqli_fetch_assoc($result)){
    echo '<tr style="height:80px">';
echo '<td style="font-size: 30px; font-family: sans-serif;" >'.$row['title'].'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.$row['date'].'</td>'.'<td>'.
' <img src="./images/'.$row['image'].'"height="300" />'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;" >'.'<a href="./ammend.php?prodId='.$row['id'].'">Amend</a>'.'</td>'.'<td style="font-size: 30px; font-family: sans-serif;">'.
 '<a href="./delete.php?prodId='.$row['id'].'">Delete</a>'.'</td>';
 echo '</tr>';
}
echo'</table>';
}





?>
</body>
</html>

	



