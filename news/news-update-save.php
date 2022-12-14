 <?php
 $news_id=$_POST['news_id'];
$title=$_POST['title'];
$desc=$_POST['desc'];
$date=$_POST['date'];
$city=$_POST['city'];
$type=$_POST['type'];
$reporter=$_POST['reporter'];

include 'db.php';
$q="update news set title='$title',description='$desc',date='$date',city='$city',type='$type',reporter='$reporter' where news_id=$news_id";
$res=mysqli_query($conn,$q);
if(mysqli_affected_rows($conn)>0)
{
	echo "<Script>alert('data updated successfully');window.location='news.php'; </script>";
}else{
	echo "<Script>alert('data not updated successfully');window.history.back(); </script>";
}
?>