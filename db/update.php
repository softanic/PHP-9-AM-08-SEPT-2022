<?php
	
	$conn=mysqli_connect('localhost','root','','php9am');
	
	$user_id=$_POST['user_id'];
	$name=$_POST['name'];
	$mobile_no=$_POST['mobile_no'];
	$email=$_POST['email_id'];
	$password=$_POST['password'];
	$city=$_POST['city'];
	
	
	$q="update users set name='$name',mobile_no='$mobile_no',email_id='$email',password='$password',city='$city' where  user_id=$user_id";
	
	$result=mysqli_query($conn,$q);
	
	if(mysqli_affected_rows($conn)>0){
		header('location:select.php');
	}else{
		echo "Fail to update data. Please try again";
		if(mysqli_errno($conn)==1062)
		{
				
		}
	}
?>