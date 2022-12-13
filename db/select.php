<?php
$conn=mysqli_connect('localhost','root','','php9am');
$q="select * from users";
$result=mysqli_query($conn,$q);
//echo mysqli_num_rows($result);	

echo "<table border=1>";
echo "<tr><th>user id</th><th>name</th><th>Mobile no</th><th>email id</th><th>password</th><th>city</th><th>delete</th></tr>";
//while($row=mysqli_fetch_row($result))
//while($row=mysqli_fetch_assoc($result))

while($row=mysqli_fetch_array($result))
{
	//print_r($row);
	echo "<tr>";
	echo "<td>".$row['user_id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['mobile_no']."</td>";
	echo "<td>".$row['email_id']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td>".$row['city']."</td>";
	echo "<td><a  href='update-form.php?user_id=".$row['user_id']."'>update</a>";
	
	echo " | <a onclick='return confirm(\" are u sure? \")' href='delete.php?user_id=".$row['user_id']."'>Delete</a></td>";
	
	echo "</tr> \n";
	
}

echo "</table>";


?>