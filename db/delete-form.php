<html>
	<body>
		<?php
		$conn=mysqli_connect('localhost','root','','php9am');
		$q="select * from users";
		$result=mysqli_query($conn,$q);
		?>
		<form action='delete.php' method="get">
			<select name="user_id">
			<?php
			while($row=mysqli_fetch_array($result))
			{
				echo "<option value='$row[0]'>$row[0] - $row[1]</option>";
			}
			?>
				
			</select>
			<input type="submit" value="delete">
		</form>
	</body>	
</html>