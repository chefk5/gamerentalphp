<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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


    </style>
</head>
<body background="arkaplan2.jpg">

<nav class="navbar navbar-inverse ">
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
<center>
    <form method="POST" action="adminAddGames.php">
        <div class="well  col-lg-4" style="margin-top: 5%; margin-left: 25px;">
            <h2>ADD GAMES:</h2>
            <input class="container-fluid" type="text" name="gameName" placeholder="Game name"><br><br>
            <input class="container-fluid" type="text" name="gameGenre" placeholder="Game genre"><br><br>
            <button class="btn-default" type="submit" style="margin-left: 7px;">Add</button>
   <!-- <button class="btn-primary" type="submit">Update</button>
   <button class="btn-danger" type="submit">Delete</button>-->
</div>
</form>
</center>


<center>
    <form method="POST" action="deleteGameAdmin.php">
    <div class="well  col-lg-4 col-lg-offset-4" style="margin-top: 5%; margin-left:15px; ">
        <h2>Delete GAMES:</h2>
   <select name="gameNameDelete">
   <option></option>
   <?php 

   $mysql_link=mysqli_connect("localhost","root","");
   mysqli_select_db($mysql_link,"project1");
   $result=mysqli_query($mysql_link,"SELECT gameName FROM games ")or die("error");
   while ($row=mysqli_fetch_array($result)) {
       echo "<option value='".$row['gameName']."'>'".$row['gameName']."'</option>";
   }
    ?>
       
   </select><br><br>
        <button class=" btn-danger" type="submit"  style="margin-left: 7px;">Delete</button>
   <!-- <button class="btn-primary" type="submit">Update</button>
   <button class="btn-danger" type="submit">Delete</button>-->
</div>
</center>
</form>

<center>
    <form method="POST" action="deleteUserAdmin.php">
    <div class="well  col-lg-3 col-lg-offset-8" style="margin-top: 5%; margin-left:15px; ">
        <h2>Delete USERS:</h2>
      <select name="UserusernameD">
   <option></option>
   <?php 

   $mysql_link=mysqli_connect("localhost","root","");
   mysqli_select_db($mysql_link,"project1");
   $result=mysqli_query($mysql_link,"SELECT username FROM users ")or die("error");
   while ($row=mysqli_fetch_array($result)) {
       echo "<option value='".$row['username']."'>'".$row['username']."'</option>";
   }
    ?></select><br><br>
        <button class="btn-default btn-danger" type="submit"  style="margin-left: 7px;">Delete</button>
   <!-- <button class="btn-primary" type="submit">Update</button>
   <button class="btn-danger" type="submit">Delete</button>-->
</div>
</center>
</form>

<div class="well col-lg-4" style="margin-top:110px;">
<center>
<h2>Feed:</h2>
<?php 

$mysql_link=mysqli_connect("localhost","root","");
mysqli_select_db($mysql_link,"project1");

$result=mysqli_query($mysql_link,"select gameName,userName,Rdate from rented ")
or die("failed to connect to database".mysqli_error());


?>
<textarea rows="7" cols="40" class="container-fluid" >
    <?php 
    while($row=mysqli_fetch_array($result)){
    echo "\n".$row['userName']."  rented ".$row['gameName']." until ".$row['Rdate']."\n";}?>

</textarea>
    
</center>
</div>
</center>

<br><br><br><br>
<div class="well-sm" style="margin-top: 180px">
  <button><a href="indexupdown.php">Upload Images to download section!</a></button>

</div>



</body>
</html>

