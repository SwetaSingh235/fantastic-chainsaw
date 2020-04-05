<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con,'hmsdb');
if(isset($_POST['pat_submit'])){
	$fname=$_POST['fname'];
	
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$dcontact=$_POST['dcontact'];
	$dtime=$_POST['dtime'];

	$query ="insert into doctorapp(fname, email, contact, docapp,dcontact,dtime)
values('$fname', '$email', '$contact', '$docapp', '$dcontact','$dtime') ";
$result = mysqli_query($con, $query);
if($result)
{
	echo"<script>alert('Appointment Registered.')</script>";
	echo"<script>window.open('admin.php','_self')</script>";

}
}