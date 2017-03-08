<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>K Rentals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
    	.well {
 		  background-color: rgba(245, 245, 245, 0.4);
}


    </style>
    <script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body background="xbox1.jpg">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">K Rentals</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index1.html">Home</a></li>
    
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
              <ul class="dropdown-menu">
                            <li><a href="loginadmin.html">Admin</a></li>
                            <li><a href="loginuser.html">User</a></li>
                             <li><a href="signout.php">Sign out</a></li>


        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
<div class="well col-lg-3 col-md-1" style="margin-top: 50px; margin-left: 20px;">
	<H2>Rent a Game</H2>
	<form method="POST" action="rentUser.php">
		  <select name="gameNameRent">
   <option></option>
   <?php 

   $mysql_link=mysqli_connect("localhost","root","");
   mysqli_select_db($mysql_link,"project1");
   $result=mysqli_query($mysql_link,"SELECT gameName FROM games ")or die("error");
   while ($row=mysqli_fetch_array($result)) {
       echo "<option value='".$row['gameName']."'>'".$row['gameName']."'</option>";
   }
    ?></select><br><br>
		<input class="container-fluid" type="date" name="dateRent" placeholder="dd/mm/yyyy"><br><br>
		<input type="submit" name="rent" class="btn-info" value="Rent">
	</form>


    </div>

<div class="well col-lg-2 col-md-1 col-lg-offset-1" style=" margin-top:50px;  ">
<h3 >Update Renting</h3>
<form method="POST" action="feedUser.php">
    <select name="gamenameRent">
   <option></option>
   <?php 

   $mysql_link=mysqli_connect("localhost","root","");
   mysqli_select_db($mysql_link,"project1");
   $result=mysqli_query($mysql_link,"SELECT gameName FROM rented ")or die("error");
   while ($row=mysqli_fetch_array($result)) {
       echo "<option value='".$row['gameName']."'>'".$row['gameName']."'</option>";
   }
    ?></select><br><br>
    <input type="date" name="daterent" placeholder="dd/mm/yyyy"><br><br>
    <input type="submit" class="btn-success" >
    

</form>    
</div>
</div>
<center>
<div id="poll" >
<h3 style="color: white">Do you like our Website?</h3>
<form style="color: white">
Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value) ">
<br>No:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
</center>



<div class="well-lg" style=" margin-top: 50px;">
<h3 style="color: #ffffff;">Game List:</h3>

<?php include 'userTextbox.php';?>

<br>
<div class="well-sm" style="margin-top: 80px">
  <button><a href="download.php">Check our downloads!</a></button>
	




</div>
</body>
</html>

