 <?php
session_start();

$mobile_no=$_SESSION['mobile_no'];
$new=$_POST['new_pass'];
$confirm=$_POST['confirm_pass'];

$conn=mysqli_connect("localhost","root","","php9am");
if($new==$confirm)
{
	$q2="update users set password='".md5($new)."' where mobile_no=$mobile_no";
	$res=mysqli_query($conn,$q2);
	if(mysqli_affected_rows($conn)>0)
	{
		echo 'password change successful';
	}else{
		echo "something went wrong, please tray again";
	}
	
}else{
	
	
		echo 'new password and confirm password doesnt match';
	
}






?>