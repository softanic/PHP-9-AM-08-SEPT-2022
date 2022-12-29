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
	echo $otp;
	//send_otp();
	//$_SESSION['otp']=$otp;
	//$_SESSION['mobile_no']=$mobile_no;
	$q2="update users set password='".md5($otp)."', reset_password=1 where mobile_no='$mobile_no'";
	$res=mysqli_query($conn,$q2);
	if(mysqli_affected_rows($conn)>0)
	{
		echo ' password reset successful <a href="login.php">Login here</a>';
	}else{
		echo mysqli_error($conn);
		echo $q2;
		echo "something went wrong, please try again";
	}
	
	//header("location:verify-otp.php");
	
}else{
	
	echo "mobile no doesnt exists";
}
 ?>