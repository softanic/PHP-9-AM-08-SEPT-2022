<?php
	session_start();
	echo $_SESSION['otp'];
?>
<html>
	<body>
		
		<form action="verify-otp.php" method="post">
			<label>Enter OTP</label><br>
			<input type="text" name="otp"><br><br>
		
			<input type="submit" value="verify" name="submit"><br><br>
		
		</form>
		
		<?php
		if(isset($_POST['submit']))
		{
			$user_otp=$_POST['otp'];
			$otp=$_SESSION['otp'];
			if($otp==$user_otp)
			{
				header('location:reset-password.php');
			}else{
				echo 'otp is wrong';
			}
		}
		?>
	</body>
</html>