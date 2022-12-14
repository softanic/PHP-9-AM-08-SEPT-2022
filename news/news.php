 <?php
 include 'db.php';
 $q="select * from news";
 $res=mysqli_query($conn,$q);
 echo "<a href='news-add.php'>Add new news</a>";
 echo "<table border=1>";
 echo "<tr><th>Sr. No.</th><th>Title</th><th>Date</th><th>city</th><th>type</th><th>Reporter</th><th>Action</th></tr>";
 while($news=mysqli_fetch_array($res))
 {
	echo "<tr>";
	echo "<td>".$news['news_id']."</td>";
	echo "<td>".$news['title']."</td>";
	echo "<td>".$news['date']."</td>";
	echo "<td>".$news['city']."</td>";
	echo "<td>".$news['type']."</td>";
	echo "<td>".$news['reporter']."</td>";
	echo "<td> 
		<a href='news-update.php?news_id=".$news['news_id']."'>Update</a> | 
		<a href='news-delete.php?news_id=".$news['news_id']."'>Delete</a>
	</td>";
	echo "</tr>";	
 }
	echo "</table>";
 ?>