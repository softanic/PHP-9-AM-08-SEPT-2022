<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("location:login.php");
	
}

$data= $_SESSION['user'];

print_r($data);
/*
$conn=mysqli_connect("localhost","root","","php9am");
$q="select * from users where user_id=$user_id";
$res=mysqli_query($conn,$q);
$data=mysqli_fetch_array($res);*/
//print_r($data);


echo "<h1>welcome {$data['name']}</h1>"
?>
<a href="logout.php">Logout</a>