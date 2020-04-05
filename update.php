<?php
session_start();
$con = new mysqli("localhost","root", "", "janm");
if(isset($_POST['submit']))
{
if(isset($_SESSION['doc_name']))
 {
   $name=$_SESSION['doc_name'];
   $nam=$_POST['username'];
   $email=$_POST['email'];
   $cno=$_POST['cno'];
   $pass=$_POST['pass'];
   $uprn=$_POST['uprn'];
   $add=$_POST['add'];
   $city=$_POST['city'];
   $hoo=$_POST['hoo'];
   $fees=$_POST['fees'];
   $exp=$_POST['exp'];
   $aoo=$_POST['aoo'];
    $q ="update doctor set dname='$nam',demail='$email',dcontactno='$cno',dpassword='$pass',duprn='$uprn',daddress='$add',dcity='$city',dhoo='$hoo',dfees='$fees',dexperience='$exp',daoo='$aoo' where docname='$name'";
       $res=mysqli_query($con,$q);
       echo 'update successfull';
       header('location:docindex.php');
}
 }
?>