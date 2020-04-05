<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database="janm";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$password=$_POST['password'];
$uprn=$_POST['uprn'];
$address=$_POST['add'];
$city=$_POST['city'];
$hoo=$_POST['hoo'];
$fees=$_POST['fees'];
$exp=$_POST['exp'];
$aoo=$_POST['aoo'];

if(!empty($name)||!empty($email)||!empty($contactno)||!empty($password)||!empty($uprn)||!empty($address)||!empty($city)||!empty($hoo)||!empty($fees)||!empty($exp)||!empty($aoo))
{
$q= "select * from doctor where demail='$email' ";

$r = mysqli_query($con, $q);
$num=mysqli_num_rows($r);
if($num==0)
{
  $query ="insert into doctor (dname,demail,dcontactno,dpassword,duprn,daddress,dcity,dhoo,dfees,dexperience,daoo)
    values( '$name', '$email','$contactno','$password','$uprn','$address','$city','$hoo','$fees','$exp','$aoo') ";

    $result = mysqli_query($con, $query);
    $_SESSION['doc_name'] =$name;
    header('location:index.php');
    echo '<script type="text/javascript"> alert("You are Successfully signed in")</script>';
    header('location:docindex.php');
}
else{
  echo '<script type="text/javascript"> alert("this email already exit")</script>';
  header('location:dregister.php');
}
}
else
echo "all fields are required";
?>
