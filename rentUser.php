<?php 
session_start();
 
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");

if (!$mysql_link) {
    die("Connection failed: " . mysqli_connect_error());
}



$gameRented=$_POST['gameNameRent'];
$dateRented=$_POST['dateRent'];
$userName=$_SESSION['login_user'];

$sql = "INSERT INTO `rented`(`gameName`, `userName`, `Rdate`) VALUES ('$gameRented','$userName','$dateRented')";






$result=mysqli_query($mysql_link,$sql);

echo "Completed Successfully!";






 ?>