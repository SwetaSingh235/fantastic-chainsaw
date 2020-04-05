<!DOCTYPE html>
<html lang="en">
<head>
  <title>JANMDATRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/docstyle.css">   
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
              <a class="nav-link" href="docindex.php">Home</a>
            </li>
            <li class="nav-item">
                   <a class="nav-link" href="dviewprof.php">View Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="docupdate.php">Update Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dmessage.php">Reply Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec5">appointment</a>
            </li>    
            <li class="nav-item">
                <?php
                session_start();
                  if(isset($_SESSION['doc_name'])){ ?>
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">logout</a></button>
                  <?php } else { ?>
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="login.php">login</a></button>
                <?php }?>
            </li>
        </ul>
    </div>
</nav>
</div>
<section id="sec2">
  <div class="container" style="margin-top:40px;
  background: -webkit-linear-gradient(45deg, #13b1cd, #f82249);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">">
  <div class="c2">
  <center><h1>View Profile</h1></center>
</div>
</div>
 <div class="container">
  <div class="card bg-info">
  <div class="card-body" style="color:black;text-align:left;border: 3px solid #ff0066;padding:20px;font-size: 25px;">
 <?php
  $con = mysqli_connect('localhost','root');
  if(isset($_SESSION['doc_name']))
  {
    mysqli_select_db($con,'janm');
    $name=$_SESSION['doc_name'];
    $q= "select * from doctor where dname='$name'";
    $result = mysqli_query($con, $q);
    while($row = mysqli_fetch_array($result))
    {
      echo "<br /><center>Your <b><i>Profile</i></b> is as follows:</center><br />";
        echo "<b> Name:</b> ". $row['dname'];
        echo "<br /><b>Email:</b> ".$row['demail'];
        echo "<br /><b>Contact :</b> ".$row['dcontactno'];
        echo "<br /><b>Password:</b> ".$row['dpassword'];
        echo "<br /><b>UPRN :</b> ".$row['duprn'];
        echo "<br /><b>Addess :</b> ".$row['daddress'];
        echo "<br /><b>City :</b> ".$row['dcity'];
        echo "<br /><b>Hours of Operation :</b> ".$row['dhoo'];
        echo "<br /><b>Fees :</b> ".$row['dfees'];
        echo "<br /><b>Experience :</b> ".$row['dexperience'];
        echo "<br /><b>Area of Operation :</b> ".$row['daoo'];
    }
  }
  echo 'login first to view your profile';
 ?> 
 </div> 
</div>
  </div>
</section>
</body></html>