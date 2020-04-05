<!DOCTYPE html>
<html lang="en">
<head>
  <title>JANMDATRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/drstyle.css">   
</head>
<body>

  
<div class="header" id="topheader">
    <nav class="navbar navbar-expand-lg fixed-top">

  <a class="navbar-brand font-weight-bold text-white" href="#">JANMDATRI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto text-uppercase">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appoint.php">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Chat with doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">My Bookings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pharmacy</a>
            </li>    
            
        </ul>
    </div>
</nav>
</div>
<section id="reg1">
  <div class="bg-img1"> </div>
    <div class="bg-text1  ">
      <form  action="dinsert.php" method="POST">
		<h1>Doctor Registration</h1>
		<level>Name:</level><input type="text" name="name" placeholder="name"><br>
    <level>Email:</level><input type="text" name="email" placeholder="email"><br>
    <level>Contact No:</level><input type="text" name="contactno" placeholder=" number"><br>
    <level>Password:</level><input type="password" name="password" placeholder="password"><br>
    <level>UPRN:</level><input type="text" name="uprn" placeholder="name"><br>           
    <level>Address:</level><input type="textarea" name="add" placeholder="name"><br>
    <level>City:</level><input type="text" name="city" placeholder="name"><br>
    <level>Hours of operation:</level><input type="text" name="hoo" placeholder="name"><br>
    <level>Fees:</level><input type="text" name="fees" placeholder="name"><br>
    <level>Experience:</level><input type="text" name="exp" placeholder="name"><br>
    <level>Area of Operation:</level><input type="text" name="aoo" placeholder="name"><br>
		<input type="submit" name="" value="SignUp">
	</form>   
    </div>
 </section>  
    
    
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>