<?php
include('conn.php');
$userid=$_POST['userid'];
$pass=$_POST['pass'];
$sql="select * from master_login where userid='$userid' and passwd='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['userid']=$result['userid']; 
header('location:asssignment7.php');
}
else
{ header('location:login1.php'); }

?>