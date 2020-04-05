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
<body>
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
        <a class="nav-link" href="chat.php">Ask Doctors</a>
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
<section style="margin-top:80px;">
<table class="table table-striped table-dark table-hover" id="table" style="width:80%;margin-left:10%;">
  <thead>
    <tr>
      <th scope="col">Slno</th>
      <th scope="col">DOCTOR NAME</th>
      <th scope="col">REPPLIED MESSAGE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php
        $con = new mysqli("localhost","root", "", "janm");
        if(isset($_SESSION['user_name']))
        {
          $name=$_SESSION['user_name'];
          $q="select * from chat where patname='$name'";
          $res=mysqli_query($con,$q);
          $i=1;
          while($row=mysqli_fetch_array($res))
          {


      ?>
      <th scope="row"><?php echo $i;$i=$i+1;?></th>
      <td scope="row"><?php echo $row['docname'];?></td>
      <td scope="row"><?php
        if($row['repmessage']==NULL)
        echo "Not Repplied";
        else
        echo $row['repmessage'];
        ?></td>
    </tr>
    <?php
     }
   }
    ?>
  </tbody>
</table>
 </section>
</body>
</html>