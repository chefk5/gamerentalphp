<?php 
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");

if (!$mysql_link) {
    die("Connection failed: " . mysqli_connect_error());
}

$gameName=$_POST['gameName'];
$gameGenre=$_POST['gameGenre'];

$sql = "INSERT INTO `games`(`gameName`, `Genre`) VALUES ('$gameName','$gameGenre')";


$result=mysqli_query($mysql_link,$sql);
echo "Completed Successfully!";






 ?>