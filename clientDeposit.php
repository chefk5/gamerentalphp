<?php
$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"Bank");


$moneyAdd=$_POST['addMoney'];
$ID=$_POST['clientName'];


$currentMoney=mysqli_query($mysql_link,"select deposit from client where ID='$ID' ")
    or die("failed to connect to database".mysqli_error());
$moneyAdd=$moneyAdd+$currentMoney;

$result=mysqli_query($mysql_link,"UPDATE client SET deposit='$moneyAdd' WHERE ID='$ID' ")
or die("failed to connect to database".mysqli_error());





?>

