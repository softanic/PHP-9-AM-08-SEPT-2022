<?php
$title=$_POST['title'];
$desc=$_POST['desc'];
$date=$_POST['date'];
$city=$_POST['city'];
$type=$_POST['type'];
$reporter=$_POST['reporter'];

include 'db.php';
$q="insert into news values(NULL,'$title','$desc','$date','$city','$type','$reporter')";
$res=mysqli_query($conn,$q);
if($res)
{
	echo "<Script>alert('data inserted successfully');window.location='news.php'; </script>";
}else{
	echo "<Script>alert('data not inserted successfully');window.history.back(); </script>";
}
?>