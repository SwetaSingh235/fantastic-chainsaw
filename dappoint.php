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
<section>
  <div style="margin-top:90px;">
  <center><h1>List Of Patients to Check Today</h1></center>
  <center><p>[select the patient's name whom you have diagnosed and click on submit]</p></center>
</div>
<div>
     <table class="table table-striped table-dark table-hover" id="table" style="width:80%;margin-left:10%;">
  <thead>
    <tr>
      <th scope="col">Slno</th>
      <th scope="col">DOCTOR NAME</th>
      <th scope="col">PATIENT NAME</th>
      <th scope="col">PATIENT EMAIL</th>
      <th scope="col">PATIENT CONTACT</th>
      <th scope="col">DATE</th>
      <th scope="col">DIAGNOSED(yes/No)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
        $con = new mysqli("localhost","root", "", "janm");
        if(isset($_SESSION['doc_name']))
        {
          $name=$_SESSION['doc_name'];
          $q="select * from appoint where docname='$name'";
          $res=mysqli_query($con,$q);
          $i=1;
          while($row=mysqli_fetch_array($res))
          {
          if($row['status']!=NULL)
          {

      ?>
      <th scope="row"><?php echo $i;$i=$i+1;?></th>
      <td scope="row"><?php echo $row['docname'];?></td>
      <td scope="row"><?php echo $row['patname'];?></td>
      <td scope="row"><?php echo $row['patemail'];?></td>
      <td scope="row"><?php echo $row['patcontact'];?></td>
       <td scope="row"><?php echo $row['date'];?></td>
      
      <td scope="row"><?php
        if($row['status1']==NULL)
        echo "NO";
        else
          echo "YES";

        ?></td>
    </tr>
    <?php
  }
     }
   }
    ?>
  </tbody>
</table>
  </div>
  <div>
    <form method="POST" action="dappointphp.php">
      <input type="hidden" name="dname" id="dname" placeholder="Doctor name"><br><br>
      <input type="hidden" name="pname" id="pname" placeholder="patient name"><br><br>
      <button name="submit" type="submit" value="Login" class="btn btn-success" style="margin-left:10%">submit</button>
    </form>
  </div>
  
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  

<script>
  var table=document.getElementById('table'),rIndex;
  for(var i=0;i<table.rows.length;i++)
  {
    table.rows[i].onclick=function()
    {
      //rIndex=this.rowsIndex;
      //console.log(rIndex);
      document.getElementById('dname').value=this.cells[1].innerHTML;
      document.getElementById('pname').value=this.cells[2].innerHTML;

         }
  }
</script>

</body>
</html>
