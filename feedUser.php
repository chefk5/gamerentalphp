<?php 
session_start();
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");

$gamename=$_POST['gamenameRent'];
$date=$_POST['daterent'];

$result=mysqli_query($mysql_link,"UPDATE rented SET Rdate='$date' WHERE gameName='$gamename' ")
or die("failed to connect to database".mysqli_error());


?>


