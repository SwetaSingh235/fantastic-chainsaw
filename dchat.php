<?php
session_start();
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,'janm');
    if(isset($_POST['submit']))
      {
        $dname=$_POST['dname'];
        $pname=$_POST['pname'];
        $rmessage=$_POST['message'];
        $q="SELECT repmessage from chat where docname='$dname' and patname='$pname'";
        $res=mysqli_query($con,$q);
        $row=mysqli_fetch_assoc($res);
        if($row['repmessage']==NULL)
        {
        $query ="update chat set repmessage='$rmessage' where patname='$pname' and docname='$dname'";
          $result = mysqli_query($con, $query);
          echo "<script>alert('message sent successfylly');</script>";
        }
        else
        	echo "<script>alert('already replied');</script>";
       }
    else
    echo "<script>alert('some error occured');</script>";
?>