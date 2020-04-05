<!DOCTYPE html>
<html lang="en">
<head>
  <title>JANMDATRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/lstyle.css">   
</head>
<body>
	<div class="header" id="topheader">
    <nav class="navbar navbar-expand-lg fixed-top">

  <a class="navbar-brand font-weight-bold text-white" href="#">JANMDATRI</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

     <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto text-uppercase">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appoint.php">Doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chat.php">Chat with doctor</a>
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
    <section id="id3">
    </section>
<div class="container" id="container">

  
	<div class="form-container sign-up-container">
		<form action="validd.php" method="POST">
			<h1>Doctor's Login</h1>
      <input type="text" placeholder="Name" name="dname">
			<input type="email" placeholder="Email" name="email">
			<input type="password" placeholder="Password" name="password">
            <p>If you haven't registered yet<a href="dregister.php"> click here to register </a></p>
			<button name="submit" value=" Login " class="ghost">Sign In</button>
		</form>
	</div>
  
	<div class="form-container sign-in-container">
		<form action="validp.php" method="POST">
			<h1>Applicant's Login</h1>
      <input type="text" placeholder="Name" name="name">
			<input type="tel" placeholder="Contact no" name="cno">
			<input type="password" placeholder="Password" name="pass">
			<p>If you haven't registered yet<a href="pregister.php"> click here to register </a></p>
			<button name="submit" value=" Login " class="ghost">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
    <div class="overlay">
        <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
                To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn">click</button>
        </div>
        <div class="overlay-panel overlay-right">
            <h1>Hello, Doctor!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">click</button>
        </div>
    </div>
</div> 
    </div>
   <center><h4>for admin login<a href="adminlogin.php"> <b>click here</b></a></h4></center>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});
</script>
</body>
</html>