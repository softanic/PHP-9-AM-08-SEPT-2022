 <html>
	<body>
		<?php
			$user_id=$_GET['user_id'];
			//echo $user_id;
			$conn=mysqli_connect('localhost','root','','php9am');
			$q="select * from users where user_id=$user_id";
			$result=mysqli_query($conn,$q);
			$user_data=mysqli_fetch_array($result);
			//echo mysqli_error($conn);
			//print_r($user_data);
		?>
		<h1>update record here..</h1>
		<form action="update.php" method="post">
			
			<input type="hidden" name="user_id" value="<?php echo $user_data['user_id']; ?>"><br><br>
			
			<label>Name</lable><br>
			<input type="text" name="name" value="<?php echo $user_data['name']; ?>"><br><br>
			
			<label>Mobile No</lable><br>
			<input type="text" name="mobile_no"  value="<?php echo $user_data['mobile_no']; ?>"><br><br>
			
			<label>email id</lable><br>
			<input type="text" name="email_id"  value="<?php echo $user_data['email_id']; ?>"><br><br>
			
			<label>password</lable><br>
			<input type="text" name="password"  value="<?php echo $user_data['password']; ?>"><br><br>
			
			<label>city</lable><br>
			<input type="text" name="city"  value="<?php echo $user_data['city']; ?>"><br><br>
			
			<input type="submit" ><br><br>
		</form>
	</body>
</html>