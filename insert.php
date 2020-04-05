<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database="janm";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";

$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$password=$_POST['password'];
if(!empty($name)||!empty($email)||!empty($contactno)||!empty($password))
{
$q= "select * from patient where contactno='$contactno' ";

$r = mysqli_query($con, $q);
$num=mysqli_num_rows($r);
if($num==0)
{
	$query ="insert into patient (name,email,contactno,password)
    values( '$name', '$email','$contactno','$password') ";

    $result = mysqli_query($con, $query);
    $_SESSION['user_name'] =$name;
    header('location:index.php');
}
else{
	echo '<script type="text/javascript"> alert("this email already exit")</script>';
	header('location:register11.php');
}
}
else
echo "all fields are required";
?>