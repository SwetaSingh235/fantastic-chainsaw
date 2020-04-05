<?php
$con = new mysqli("localhost","root", "", "janm");
  $dname=$_POST['dname'];
  $pname=$_POST['pname'];
  $status1="YES";
    $q="update appoint set status1='$status1' where patname='$pname' and docname='$dname'";
          $res=mysqli_query($con,$q);
          echo "successful";
          header('location:dappoint.php');
  ?>