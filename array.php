<html>
	<head>
		<style>
			.marksheet{
					border:1px solid red;
					margin:5px;
					padding:15px;
					page-break-after:always;
			}
		</style>
	</head>
	<body>
		<?php
		//$m=[10,[15,13,14],16];
		//$h=[$m,11];
		$marks=array('harshada'=>[10,11],'gargi'=>[15,16],'pranali'=>[13,15],'devyani'=>[14,24],'siddhi'=>[16,17]);
		//echo "<pre>";
		//print_r($m);
		//print_r($marks);

		//echo $marks['harshada'][1];

		//foreach($marks as $value)
		foreach($marks as $name => $m)
		{
			echo "<div class='marksheet'>";
			echo "<table border=1>";
			echo "<tr><th colspan=2><h1>Softanic Solutions</h1></th></tr>";
			echo "<tr><th>Name:</th><th>$name</th></tr>";
			echo "<tr><th>Subject</th><th>Marks</th></tr>";
			echo "<tr><td>PHP</td><td>$m[0]</td></tr>";
			echo "<tr><td>HTML</td><td>$m[1]</td></tr>";
			
			echo "</table>";
			echo "</div>";
		}
	

		/*for($i=0;$i<sizeof($marks);$i++)
		{
			//echo "welcome ".$names[$i].', you got '.$marks[$i].' marks<br>';
		}*/

		?>
	</body>
</html>