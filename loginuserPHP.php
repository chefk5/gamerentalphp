<?php
/**
 * Created by PhpStorm.
 * User: Khaled Charkie
 * Date: 11/26/2016
 * Time: 10:40 AM
 */

$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$username=$_POST['userUsername'];
$password=$_POST['userPassword'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($mysql_link,$username);
$password=mysqli_real_escape_string($mysql_link,$password);



$result=mysqli_query($mysql_link,"select * from users where username='$username' and password='$password'")
or die("failed to connect to database".mysqli_error());

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['login_user']=$username;
	header("location:userPage.php");
}
else
{
    echo "Wrong username or password";
}
}
?>