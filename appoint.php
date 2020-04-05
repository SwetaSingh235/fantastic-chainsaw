<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>JANMDATRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/astyle.css">
</head>
<body>
  <div class="header" id="topheader">
<nav class="navbar navbar-expand-lg fixed-top">
  <a class="navbar-brand font-weight-bold text-white" href="#">JANMDATRI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto text-white">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appoint.php">Doctor's appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chat.php">Ask doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patient.php">My Booking</a>
            </li>
            <li class="nav-item">
              <?php
              if(isset($_SESSION['user_name'])){ ?>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">logout</a></button>
               <?php } else {?>
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="login.php">login</a></button>
                 <?php }?>
    </li>
        </ul>
    </div>
</nav>
</div>
<br>
  <div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div id="data1">
                     <h2>Select city</h2>
                     <h4>to book appointment</h4>
                </div>
                
                    <form action="" method="post">
                      <div class="select-style">
                          <select name="place">
                                  <option >JAMSHEDPUR</option>
                                  <option >RANCHI</option>
                                  <option >DHANBAD</option>
                                  <option >BOKARO</option>
                                  <option >CHAIBASA</option>
                          </select><br>
                        </div>
                        <div class="buton">
                          <button type="submit" name="submit" value="SELECT" class="btn btn-light" >click</button>
                        </div>
                    </form>
              </div>
            <div class="col-lg-6">
                <img src="images/doc3.jpg" class="img-fluid aboutimg" style="width:100%;height: 400px!important;margin-top:100px;margin-left:80px">
              </div> 
            </div>
          </div>    

  </div>

  <div class="head">
  <h3 class="text-center">Click on any of the following doctor's name to get an appointment</h3>
  <br>
  </div>

  <div>
                        <table align="center" border="2px" style="width:900px; line-height:40px;border:solid 2px;background:" id="table">
                        <thead>
                      	<tr>
                      		<th colspan="7" class="text-center"><h1>Doctor's List</h1></th>
                      	</tr>
                      	<th>NAME</th>
                      	<th>EMAIL-ID</th>
                      	<th>CONTACT-NO</th>
                      	<th>ADDRESS</th>
                      	<th>HOURS OF OPERATION</th>	
                          <th>FEES</th>
                          <th>click</th>
                      	</thead>
                      <tbody>
                      <?php
                      if(isset($_POST['submit']))
                      {
                      $val = $_POST['place'];
                      $con = mysqli_connect('localhost','root','','janm');
                      $q= "select * from doctor where dcity='$val' ";
                      $r = mysqli_query($con, $q);
                      if(mysqli_num_rows($r) > 0 )
                      {
                       while ($row= mysqli_fetch_assoc($r))
                                  {

                          ?>
                                 <tr>
                                 	<td><?php echo $row['dname']?> </td>
                                 	<td><?php echo $row['demail']?> </td>
                                 	<td><?php echo $row['dcontactno']?> </td>
                                 	<td><?php echo $row['daddress']?></td>
                                 	<td><?php echo $row['dhoo']?> </td>
                                 	<td><?php echo $row['dfees']?> </td>
                                  <td>click</td>
                                 </tr>  
                                 <?php         
                                  }
                              }
                      }
                      ?>
                      </tbody>
                      </table>
</div>
    <div class="card">
    <div class="card-body">
    <form method="POST" action="doc.php">
      <input type="text" name="docname" id="dname" placeholder="Doctor's Name"><br><br>
      <input type="text" name="docemail" id="email" placeholder="Doctor's EmailId"><br><br>
      <input type="text" name="docnum" id="cnum" placeholder="Doctor's contact No"><br><br>
      <input type="date" name="date" id="date" placeholder="Date"><br><br>
      <button name="submit" type="submit" value="Login" class="abc">submit</button>
    </form>
    </div>
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
      document.getElementById('dname').value=this.cells[0].innerHTML;
      document.getElementById('email').value=this.cells[1].innerHTML;
      document.getElementById('cnum').value=this.cells[2].innerHTML;

         }
  }
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <br><br>
  <section id="footer" style="background:gray;text-align:center">
     <div class="container">
            <div class="copyright ">
                &copy; Copyright <strong>Birsa Institute Of Technology, Sindri</strong>.
            </div>
            <div class="credits">
                Designed by <a href="#" >SWETA SINGH</a>
                <!-- Trigger the modal with a button -->
                <a style="display:block;"  data-toggle="modal" data-target="#myModal">Privacy Policy</a> 

</div>
</div>
</section>

</body>
</html>