<?php
$mobile_no=$_POST['mobile_no'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","","php9am");
$q="select * from users where mobile_no='$mobile_no' and password='$password'";
$res=mysqli_query($conn,$q);
$count=mysqli_num_rows($res);
$data=mysqli_fetch_array($res);

if($count >0)
{
	//echo "login success";
	header("location:home.php?id=".$data['user_id']);
}else{
	
	echo "<script>alert('Your username/password is wrong, please try again.');window.history.back();</script>";
}
?>