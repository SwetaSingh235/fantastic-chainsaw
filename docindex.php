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
              <a class="nav-link" href="dappoint.php">appointment</a>
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
<section id="sec1">
  <div class="sec1-container ">
  <h3 class="mb-4 pb-0">Disease increases in proportion to the increase in the number of <span>doctors</span> in a place.</h3> 
  </div>
</section>
</body>
</html>