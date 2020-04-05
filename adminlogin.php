<!DOCTYPE html>
<html lang="en">
<head>
  <title>JANMDATRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/prstyle.css">   
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">JANMDATRI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<?php
$con = new mysqli("localhost","root", "", "janm");

if(isset($_POST['submit']))
{
  $email=$_POST['email'];
$pass=$_POST['pass'];
$q="select * from adminlogin where email='$email' and password='$pass'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
if($num==1)
header('location:admin.php');
else
header('location:adminlogin.php');
}

?>
<section id="reg1">
  <div class="bg-img1"> </div>
    <div class="bg-text1  ">
      <form  action="" method="POST">
		<h1>ADMIN LOGIN</h1>
		<level>Email:</level><input type="email" name="email" placeholder="email"><br>
    <level>Password:</level><input type="password" name="pass" placeholder="password"><br>
		<input type="submit" name="submit" value="SignUp">
	</form>   
    </div>
 </section>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>