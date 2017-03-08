<?php 
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");

if (!$mysql_link) {
    die("Connection failed: " . mysqli_connect_error());
}

$username=$_POST['username'];
$userpassword=$_POST['userpassword'];
$useremail=$_POST['useremail'];
$userphone=$_POST['userphone'];

if($username=="")
echo "Fill all fields!";
else 
header("location:loginuser.html");

$sql = "INSERT INTO `users`(`username`, `password`,`email`,`phone`) VALUES ('$username','$userpassword','$useremail','$userphone')";


$result=mysqli_query($mysql_link,$sql)or die("wrong");







 ?>