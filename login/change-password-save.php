<?php
session_start();

$old=$_POST['old_pass'];
$new=$_POST['new_pass'];
$confirm=$_POST['confirm_pass'];

$data= $_SESSION['user'];
$user_id=$data['user_id'];

$conn=mysqli_connect("localhost","root","","php9am");
$q="select * from users where user_id='$user_id' and password='". md5($old)."'";
$res=mysqli_query($conn,$q);
$count=mysqli_num_rows($res);
if($count > 0 and $new==$confirm)
{
	$q2="update users set password='".md5($new)."',reset_password=0 where user_id=$user_id";
	$res=mysqli_query($conn,$q2);
	if(mysqli_affected_rows($conn)>0)
	{
		echo 'password change successful';
	}else{
		echo "something went wrong, please tray again";
	}
	
}else{
	
	if($count <=0)
	{
		echo 'old password incorrect';
	}else{
		echo 'new password and confirm password doesnt match';
	}
}






?>