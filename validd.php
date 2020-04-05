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
$name=$_POST['dname'];
$email= $_POST['email'];
$password= $_POST['password'];

$q= "select * from doctor where demail='$email' && dpassword='$password' ";

$result = mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['doc_name'] =$name;
	header('location:docindex.php');
}
else
	header('location:login1.php');
}
?>