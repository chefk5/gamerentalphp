<?php 
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");



$gameNamed=$_POST['gameNameDelete'];

$sql = "DELETE FROM games WHERE gameName = '$gameNamed' ";

$row=mysqli_query($mysql_link,$sql)or die("can't delete game!");

echo "Completed Successfully!";
	
header("location:http://localhost/project1.1/adminPage.php");








 ?>


















 