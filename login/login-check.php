<?php
session_start();
$mobile_no=$_POST['mobile_no'];
$password=md5($_POST['password']);

$conn=mysqli_connect("localhost","root","","php9am");
$q="select * from users where mobile_no='$mobile_no' and password='$password'";
$res=mysqli_query($conn,$q);
$count=mysqli_num_rows($res);
$data=mysqli_fetch_array($res);

if($count >0)
{
	//echo "login success";
	
	$_SESSION['user']=$data;
	header("location:home.php");
}else{
	
	echo "<script>alert('Your username/password is wrong, please try again.');window.history.back();</script>";
}
?>