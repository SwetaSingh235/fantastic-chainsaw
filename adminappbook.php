<?php
$con = new mysqli("localhost","root", "", "janm");
if(isset($_POST['submit']))
{
	$demail=$_POST['demail'];
	$pemail=$_POST['pemail'];
	$status="booked";

	$q="select * from appoint where patemail='$pemail' and docemail='$demail'";
	$r=mysqli_query($con,$q);
   $row = mysqli_fetch_array($r);
   if($row['status']==NULL)
   {
   	$query ="update appoint set status='$status' where patemail='$pemail' and docemail='$demail'";
    $result = mysqli_query($con, $query);

    header('location:admin.php');
   }
}
?>