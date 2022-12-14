<?php
include 'db.php';
$news_id=$_REQUEST['news_id'];
$q="delete from news where news_id=$news_id";
$res=mysqli_query($conn,$q);
if(mysqli_affected_rows($conn)>0)
{
	echo "<Script>alert('data deleted successfully');window.location='news.php'; </script>";
}else{
	echo "<Script>alert('data not deleted successfully');window.history.back(); </script>";
}
?>