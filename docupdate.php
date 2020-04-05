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
<section id="update">
  <div class="container headings text-center" style="margin-top:55px;margin-bottom:35px;">
    <h1 class="text-center font-weight-bold">Update Profile</h1>
  </div>
<?php
$con = new mysqli("localhost","root", "", "janm");
 if(isset($_SESSION['doc_name']))
 {
   $name=$_SESSION['doc_name'];
   $q= "select * from doctor where dname='$name'";
   $r=mysqli_query($con,$q);
   $row = mysqli_fetch_array($r);
   
   
  
?>

  <div class="container" style="color:white">
    <form action="update.php" method="post">
    <div class="row">
      <div class="col-lg-4">
        <b><p>NAME:-</p></b>
      </div>
      <div class="col-lg-4">
        <?php echo $row['dname'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Enter name" id="username" required autocomplete="off">
          </div>
        </div>
     </div>
     <div class="row">
      <div class="col-lg-4">
        <b><p>EMAIL:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['demail'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="email" placeholder="Enter email"  id="email" required autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <b><p>CONTACT NUMBER:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['dcontactno'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="cno" placeholder="Enter contact no"  id="cno" required autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <b><p>PASSWORD:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['dpassword'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="password" class="form-control" name="pass" placeholder="Enter password"  id="pass" required autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <b><p>UPRN:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['duprn'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="uprn" placeholder="Enter uprn"  id="uprn" required autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <b><p>ADDRESS:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['daddress'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <textarea type="text" class="form-control" name="add" placeholder="Enter address"  id="add" required autocomplete="off">
          </textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <b><p>CITY:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['dcity'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="city" placeholder="Enter city"  id="city" required autocomplete="off">
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-lg-4">
        <b><p>HOURS OF OPERATION:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['dhoo'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="hoo" placeholder="Enter hours of operation"  id="hoo" required autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <b><p>FEES:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['dfees'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="fees" placeholder="Enter fees"  id="fees" required autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        <b><p>EXPERIENCE:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['dexperience'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="exp" placeholder="Enter experience"  id="exp" required autocomplete="off">
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-lg-4">
        <b><p>AREA OP OPERATION:-</p></b>
      </div>
       <div class="col-lg-4">
        <?php echo $row['daoo'];?>
      </div>
      <div class="col-lg-4">
          <div class="form-group">
          <input type="text" class="form-control" name="aoo" placeholder="Enter area of operation"  id="aoo" required autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-3">
          <div  class="form-group">
          <button type="submit" class="btn btn-danger" name="submit">Edit</button>
          </div>
       </div>
     </div>
</div>
</form>
<?php

}
 else
 echo "<script>alert('login first');</script>";
?>
</section>
</body>
</html>