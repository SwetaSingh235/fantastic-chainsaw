<?php

session_start();
// Create connection
$con = new mysqli("localhost", "root", "", "janm");

if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$email=$_POST['email'];
$cno=$_POST['cno'];
$message=$_POST['message'];
$q="INSERT INTO contact (username,useremail,usernumber,message) VALUES ('$uname','$email','$cno','$message')";
$res=mysqli_query($con,$q);
header('location:index.php');
}
?>