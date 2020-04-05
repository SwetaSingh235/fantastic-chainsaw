
<!DOCTYPE html>

<html>
<head>
	<title></title>
  <style>
    #intro {
    width: 100%;
    height: 100vh;
    background: url("images/back4.jpg") top center;
    background-size: cover;
    overflow: hidden;
    position: relative;
    margin-top:0px;
}
#intro:before {
    margin-top:0px;
    content: "";
    background: rgba(6, 12, 34, 0.4);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}
  </style>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="css/style1.css" rel="stylesheet"/>
</head>
<body>
<div class="jumbotron" id="intro">
    
    <div class="container">
    	<div class="card">
    		<div class="card-body">
    			<div class="row">
    				<div class="col-md-3">
    		  	<h3>Patient Details</h3>
    		    </div>
    		    <div class="col-md-8">
    			  <form class="form-group" action="" method="post">
    			    <div class="row">
    			     <div class="col-md-10"><input type="text" name="contact" placeholder="enter your contact number" class="form-control">
               </div>
    			     <div class="col-md-2"><input type="submit" name="search" class="btn btn-light">
               </div>
    		      </div>
    	      </form>
            </div>
          </div>
        </div>
    	<div class="card-body">
    		<table class="table table-hover">
        <thead>
          <tr>
          
            <th scope="col">First Name</th>
            <th scope="col">Email Id</th>
            <th scope="col">Contact No.</th>
            <th scope="col">Doctor Appointed</th>
            <th scope="col">Doctor Contact No.</th>
            <th scope="col">Date</th>
            <th scope="col">Appointment Status</th>
          </tr>
        </thead>
        <tbody>


                <?php
                  
                $con=mysqli_connect("localhost","root");
                $db=mysqli_select_db($con,'janm');
                if(isset($_POST['search']))
                {
                	$contact=$_POST['contact'];
                	$que="select * from appoint where patcontact='$contact'";
                	$res=mysqli_query($con,$que);
                  	while($row=mysqli_fetch_array($res))
                	{
                		
                  ?>

                  <tr>
                    <td><?php echo $row['patname'];?></td>
                       <td><?php echo $row['patemail'];?></td>
                          <td><?php echo $row['patcontact'];?></td>
                          <td><?php echo $row['docname'];?></td>
                                <td><?php echo $row['docnum'];?></td>
                                <td><?php echo $row['date'];?></td>
                                 <td><?php 
                                 if($row['status']==NULL)
                                  echo "pending";
                                else
                                 echo $row['status'];?></td>
                  </tr>
                  <?php
                }
                }
                ?>

                    
            </tbody>
          </table>
     </div>

</div> 

    <div class="container" style="margin-top:40px;margin-left:35%">
      <div class="row">
        <div class="col-lg-2">
          <button type="submit" name="submit"class="btn btn-success"><a href="index.php" style="color:white"> PATIENT'S HOME PAGE</a></button>
        </div>
        <div class="col-lg-2">
          <button type="submit" name="submit"class="btn btn-danger"><a href="docindex.php"style="color:white">DOCTOR'S HOME PAGE</a></button>
        </div>
      </div>
    </div>
</div>


	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>




















 