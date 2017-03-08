<?php
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");


$username=$_POST['adminUsername'];
$password=$_POST['adminPassword'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($mysql_link,$username);
$password=mysqli_real_escape_string($mysql_link,$password);



$result=mysqli_query($mysql_link,"select * from admin where adminusername='$username' and adminPassword='$password'")
    or die("failed to connect to database".mysqli_error());

$row=mysqli_fetch_array($result);
if($row['adminusername']==$username && $row['adminPassword']==$password){

    header("location:adminPage.php");
}
else{
    echo "nooo";
}


?>


