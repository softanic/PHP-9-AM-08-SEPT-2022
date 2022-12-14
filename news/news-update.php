<html>
	<body>
	<?php
	$news_id=$_REQUEST['news_id'];
	include 'db.php';
	$q="select * from news where news_id=$news_id";
	$res=mysqli_query($conn,$q);
	$news=mysqli_fetch_array($res);
	
	?>
		<form action='news-update-save.php' method="post">
			<table>
				<tr>
					<input type="hidden" value="<?php echo $news['news_id']; ?>" name="news_id">
					<th>title</th>
					<td><input type="text" value="<?php echo $news['title']; ?>" name="title">
				</tr>
				<tr>
					<th>Desc</th>
					<td><Textarea name="desc"><?php echo $news['description']; ?></textarea>
				</tr>
					<tr>
					<th>date</th>
					<td><input type="date" name="date" value="<?php echo $news['date']; ?>">
				</tr>
				<tr>
					<th>city</th>
					<td><input type="text" name="city" value="<?php echo $news['city']; ?>">
				</tr>
				<tr>
					<th>type</th>
					<td><input type="text" name="type" value="<?php echo $news['type']; ?>">
				</tr>
				<tr>
					<th>reporter</th>
					<td><input type="text" name="reporter" value="<?php echo $news['reporter']; ?>">
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" value="Publish news">
				</tr>
			</table>
		</form>
	</body>
</html>