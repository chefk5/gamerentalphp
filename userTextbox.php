<?php 

$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");

$result=mysqli_query($mysql_link,"select gameName from games ")
or die("failed to connect to database".mysqli_error());


?>
<textarea rows="7" >
	<?php 
	while($row=mysqli_fetch_array($result)){
	echo "\n".$row['gameName']."\n";}?>

</textarea>

