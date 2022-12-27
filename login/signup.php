<html>
	<body>
		<form action="signup-save.php" method="post" enctype="multipart/form-data">
			<label>Name</label><br>
			<input type="text" name='name'><br>
			
			<label>Mobile no</label><br>
			<input type="text" name='mobile_no'><br>
			
			<label>email id</label><br>
			<input type="text" name='email_id'><br>
			
			<label>Password</label><br>
			<input type="text" name='password'><br>
			
			<label>gender</label><br>
			<input type="radio" name='gender' value="male">Male
			<input type="radio" name='gender' value="female">Female
			
			<br>
			<label>city</label><br>
			<input type="text" name='city'><br>
			
			<label>Photo</label><br>
			<input type="file" name='photo' accept="image/*"><br>
			
			<input type="submit" value="Sign up">
		</form>
	</body>	
</html>