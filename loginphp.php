<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khaledcharkie";


$netsalary=0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$password=$_POST['password'];

if($password==123)
{
	$_SESSION['login_user']=$password;
	header("location:nbrOfEmp.php");
}




else
{
    echo "Wrong username or password";
}



 ?>