<!DOCTYPE html>
<html lang="en">
<head>
  <title>JANMDATRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/docstyle.css">  
  <style>
    .jumbotron{
  background: url(../images/back.jpg) top center;
  background-size: cover;
  overflow: hidden;
  position: relative;
  height: 100vh;
  width:100%;
  margin-top:70px;
}
.card-body{
  background-color: #3498DB;
  color:#ffffff;
}
  </style>  
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


<div class="jumbotron">
    
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
               <h3>Messages Recived</h3>
            </div>
            </div>
            </div>
        <div class="card-body">
        <table class="table" id="table">
  <thead>
    <tr>
    
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Patient EmailId</th>
      <th scope="col">message</th>
      <th scope="col">status</th>
      <th scope="col">click to reply</th>
    </tr>
  </thead>
  <tbody>


<?php
  
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,'janm');
if(isset($_SESSION['doc_name']))
{
  $name=$_SESSION['doc_name'];
  $que="select * from chat where docname='$name'";
  $res=mysqli_query($con,$que);
  while($row=mysqli_fetch_assoc($res))
  {
    
  ?>
  <tr>

       <td><?php echo $row['patname'];?></td>
       <td><?php echo $name;?></td>
       <td><?php echo $row['patemail'];?></td>
       <td><?php echo $row['message'];?></td>
       <td><?php 
         if($row['repmessage']==NULL)
         echo 'not replied';
         else
         echo 'replied';
        ?></td>
      <td><button type="submit" name="submit" class="btn btn-danger" >click</button></td>
  </tr>
  <?php
}
}
?>    
  </tbody>
</table>
</div>
</div>
</div> 
<br>
     <div class="card" style="width:50%;margin-left:25%;text-align: center">
        <div class="card-body">
        <form method="POST" action="dchat.php">
          <input type="text" name="pname" id="pname" placeholder="Patient's Name"><br><br>
          <input type="text" name="dname" id="dname" placeholder="Doctor's Name"><br><br>
          <textarea type="text" name="message" id="message" placeholder="Message"></textarea><br><br>
          <button name="submit" type="submit" value="Login"class="btn btn-danger" >submit</button>
        </form>
        </div>
      </div>
  </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  var table=document.getElementById('table'),rIndex;
  for(var i=0;i<table.rows.length;i++)
  {
    table.rows[i].onclick=function()
    {
      //rIndex=this.rowsIndex;
      //console.log(rIndex);
      document.getElementById('pname').value=this.cells[0].innerHTML;
      document.getElementById('dname').value=this.cells[1].innerHTML;
         }
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>