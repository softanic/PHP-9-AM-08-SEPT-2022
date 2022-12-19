
<?php
$user_id= $_GET['id'];

$conn=mysqli_connect("localhost","root","","php9am");
$q="select * from users where user_id=$user_id";
$res=mysqli_query($conn,$q);
$data=mysqli_fetch_array($res);
//print_r($data);

echo "<h1>welcome {$data['name']}</h1>"
?>
<a href="login.php">Logout</a>