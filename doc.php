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
$patname=$_SESSION['user_name'];
$q="select email,contactno from patient where name='$patname'";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($r);
$patemail=$row['email'];
$patcont=$row['contactno'];

$docname= $_POST['docname'];
$docemail= $_POST['docemail'];
$docnum= $_POST['docnum'];

$time = strtotime($_POST['date']);
$new_date = date('Y-m-d', $time);
if(!empty($docname)||!empty($docemail)||!empty($docnum))
{
  if(isset($_SESSION['user_name']))
  {

	$query ="insert into appoint (patname,docname,docemail,docnum,patemail,patcontact,date)
    values( '$patname','$docname', '$docemail','$docnum','$patemail','$patcont','$new_date') ";

    $result = mysqli_query($con, $query);
    echo 'appointment booked successfully';
    header('location:index.php');
   }
   else
	{
	echo 'you need to login first';
	}
}
}
?>