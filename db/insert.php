<?php
	
	$conn=mysqli_connect('localhost','root','','php9am');
	/*if($conn)
	{
		echo 'connected';
	}else{
		echo 'not connected';
	}
	*/
	$name=$_POST['name'];
	$mobile_no=$_POST['mobile_no'];
	$email=$_POST['email_id'];
	$password=md5($_POST['password']);
	$city=$_POST['city'];
	$q="insert into users values (NULL,'$name','$mobile_no','$email','','$password','$city')";
	$result=mysqli_query($conn,$q);
	if($result){
		echo "Data inserted successful";
	}else{
		echo "Fail to insert data. Please try again";
		echo mysqli_error($conn);
	}
?>