<?php 
session_start();
$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

if(isset($_POST['submit']))
{
	mysqli_select_db($con,'janm');

$username= $_POST['name'];
$contactno= $_POST['cno'];
$password= $_POST['pass'];

$q= "select * from patient where contactno='$contactno' && password='$password' ";

$result = mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['user_name'] =$username;
	header('location:index.php');
}
else
	header('location:pregister.php');
}
else
header('location:pregister.php');
?>