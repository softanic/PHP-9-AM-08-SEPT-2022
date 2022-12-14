<html>
	<body>
		<form action='news-save.php' method="post">
			<table>
				<tr>
					<th>title</th>
					<td><input type="text" name="title">
				</tr>
				<tr>
					<th>Desc</th>
					<td><Textarea name="desc"></textarea>
				</tr>
					<tr>
					<th>date</th>
					<td><input type="date" name="date">
				</tr>
				<tr>
					<th>city</th>
					<td><input type="text" name="city">
				</tr>
				<tr>
					<th>type</th>
					<td><input type="text" name="type">
				</tr>
				<tr>
					<th>reporter</th>
					<td><input type="text" name="reporter">
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" value="Publish news">
				</tr>
			</table>
		</form>
	</body>
</html>