 <?php
	
	$conn=mysqli_connect('localhost','root','','php9am');
	$name=$_POST['name'];
	$mobile_no=$_POST['mobile_no'];
	$email=$_POST['email_id'];
	$password=md5($_POST['password']);
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	
	$q1="select * from users where mobile_no='$mobile_no'";
	$res=mysqli_query($conn,$q1);
	
	echo "<pre>";
	print_r($_POST);
	
	print_r($_FILES);
	
	$tmp=$_FILES['photo']['tmp_name'];
	$name="uploads/".$_FILES['photo']['name'];
	move_uploaded_file($tmp,$name);
	
	/*if(mysqli_num_rows($res) > 0)
	{
	
		
		
		echo "mobile no already exists, please login <a href='login.php'>Login here</a>";
		
	}else{
		$q="insert into users values (NULL,'$name','$mobile_no','$email','$gender','$password','$city')";
		$result=mysqli_query($conn,$q);
		if($result){
			echo "Data inserted successful";
		}else{
			echo "Fail to insert data. Please try again";
			echo mysqli_error($conn);
		}
	}
	*/
?>