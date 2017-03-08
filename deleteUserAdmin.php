<?php 
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");



$usernamedelete=$_POST['UserusernameD'];
echo $usernamedelete;


$sql = "DELETE  FROM users WHERE username = '$usernamedelete' ";


mysqli_query($mysql_link,$sql)or die("can't delete!");

echo "Completed Successfully!";



 ?>