 <?php
 session_start();
 $mobile_no=$_POST['mobile_no'];
 
 $conn=mysqli_connect("localhost","root","","php9am");
$q="select * from users where mobile_no='$mobile_no'";

$res=mysqli_query($conn,$q);
$count=mysqli_num_rows($res);
if($count>0)
{
	//send otp
	$otp=rand(100000,999999);
	//send_otp();
	$_SESSION['otp']=$otp;
	$_SESSION['mobile_no']=$mobile_no;
	
	header("location:verify-otp.php");
	
}else{
	
	echo "mobile no doesnt exists";
}
 ?>