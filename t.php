<?php
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");



/*$usernamedelete=$_POST['UserusernameD'];
echo $usernamedelete;*/




$resul$t=mysql_link($mysql_link,"DELETE  FROM 'admin' WHERE 'adminusername' = 'admin1' ")or die("error");



?>