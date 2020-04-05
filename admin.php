<!DOCTYPE html>
<html>
<head>
    <title></title>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/style1.css" rel="stylesheet"/>
</head>
<body>
       <div class="jumbotron">
    
    <div class="container-fluid">
    <div class="row">
          <div class="col-md-3">
          <div class="list-group">
            
            <a href="" class="list-group-item active">Patients</a>
            <a href="patient.php" class="list-group-item">Patient Details</a>
            <a href="" class="list-group-item ">Payment/Checkout</a>
        
         </div>
         </div>
         <div class="col-md-3 col-lg-9">
               <h3>Appointment</h3>
               <p>click on the row to book appointment</p>
        <div class="card-body">
        <table class="table table-hover" id="table">
              <thead>
                <tr>
                  <th scope="col">Patient Name</th>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Doctor EmailId</th>
                  <th scope="col">Doc contactno</th>
                  <th scope="col">patient Email</th>
                  <th scope="col">Patient contactno</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Diagonisis status</th>

                </tr>
              </thead>
              <tbody>
                <?php
  
                    $con=mysqli_connect("localhost","root");
                    $db=mysqli_select_db($con,'janm');
                    session_start();
                    
                      $que="select * from appoint";
                      $res=mysqli_query($con,$que);
                      while($row=mysqli_fetch_assoc($res))
                      {
                      ?>
                      <tr>

                           <td><?php echo $row['patname'];?></td>
                           <td><?php echo $row['docname'];?></td>
                           <td><?php echo $row['docemail'];?></td>
                           <td><?php echo $row['docnum'];?></td>
                           <td><?php echo $row['patemail'];?></td>
                           <td><?php echo $row['patcontact'];?></td>
                           <td><?php echo $row['date'];?></td>
                           <td><?php 
                           if($row['status']==NULL)
                            echo 'pending';
                           else
                           echo $row['status']?></td>
                           <td><?php
                             if($row['status1']==NULL)
                                echo "NO";
                            else
                                echo $row['status1'];
                           ?>
                      </tr>
                      <?php
                    }
                
                    ?>    
                      </tbody>
                    </table>
        </div> 
        </div>       

    </div> 
  </div>
<div style="margin-left:26%;">
<form method="POST" action="adminappbook.php">
      <input type="hidden" name="demail" id="demail" placeholder="Doctor EmailId"><br><br>
      <input type="hidden" name="pemail" id="pemail" placeholder="patient EmailId"><br><br>
      <button name="submit" type="submit" value="Login" class="btn btn-success">submit</button>
    </form>
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
      document.getElementById('demail').value=this.cells[2].innerHTML;
      document.getElementById('pemail').value=this.cells[4].innerHTML;

         }
  }
</script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
