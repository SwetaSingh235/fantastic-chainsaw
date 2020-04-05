<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="css/cstyle.css" rel="stylesheet"/>

 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
 
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="janm";
$con = new mysqli($servername, $username, $password, $database);
if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $demail = $_POST['demail'];
    $pemail = $_POST['pemail'];
    $message=$_POST['message'];
    if(!empty($name)||!empty($demail)||!empty($pemail)||!empty($message))
    {
     if(isset($_SESSION['user_name']))
     { 

          $pname=$_SESSION['user_name'];
          $sql = "SELECT * FROM `doctor` where dname = '".$name."' and demail = '".$demail."' ";
          $query =  mysqli_query($con, $sql);
          if(mysqli_num_rows($query)>0)
          {
            $query1 ="insert into chat (patname,docname,docemail,patemail,message)
             values( '$pname','$name', '$demail','$pemail','$message') ";

              $result = mysqli_query($con, $query1);
              echo "<script> alert('Message sent successfully') </script>";
          }
          else
          {
            echo "<script> alert('Invalid doctor name or email.') </script>";
          }
      }
      else
      echo "<script> alert('You Should Login First')</script>";
    }
    else
    echo "<script> alert('all field must be filled')</script>";
  }  

?>

<body>
  <div class="header" id="topheader">
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container  text-uppercase">

    <div id="logo" class="pull-left">
  <a class="navbar-brand font-weight-bold text-white" href="#"><img src="images/" >JANMDATRI</a>
   
            </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="appoint.php">Doctors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chat.php">Ask Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="patient.php">My Bookings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Pharmacy</a>
      </li>
    </ul>
  
  </div>
</div>
</nav>
 </div>
 <section id="sec">
  <div class="container">
    <div class="container1">
  <center><h2>Message Doctor</h2></center></br>
  <center><p style="color:white">If not loggedin/registered <a href="login.php"> click here</a></p></center>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Doctor'sName:</label>
    
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder=" Enter doctor's name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Doctor'sEmail:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="demail" placeholder="Enter doctor's email id" name="demail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Patient'sEmail:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="pemail" placeholder="Enter patient's email id" name="pemail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Message:</label>
      <div class="col-sm-10">          
        <textarea type="text" class="form-control" id="message" placeholder="Enter message" name="message"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Send</button>
      </div>
      <div><p style="color:white"><a href="chat1.php">click here </a>to view doctor's replied message</p></div>
    </div>
  </form>
</div>
</div>
 </section>
</body>
</html>