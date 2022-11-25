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
		$marks=array('harshada'=>['html'=>[10,50,17],'php'=>11],
					 'gargi'=>['Java'=>15,'php'=>16,'css'=>14,'js'=>24],
					 'pranali'=>['C programming'=>13,'c++'=>15 ,'css'=>14],
					 'devyani'=>['css'=>14,'js'=>24],
					 'siddhi'=>['asp'=>16,'python'=>17, 'css'=>14,'js'=>24]
					 );
		foreach($marks as $name => $m)
		{
			echo "<div class='marksheet'>";
			echo "<table border=1>";
			echo "<tr><th colspan=2><h1>Softanic Solutions</h1></th></tr>";
			echo "<tr><th>Name:</th><th>$name</th></tr>";
			echo "<tr><th>Subject</th><th>Marks</th></tr>";
			$total=0;
			foreach($m as $subject_name => $subject_marks)
			{
				$total =$total+$subject_marks;
				echo "<tr><td>$subject_name</td><td>{$subject_marks}</td></tr>";
			}
			//echo "<tr><th>Total</th><th>{$total}</th></tr>";
			echo "<tr><th>Total</th><th>". array_sum($m)."</th></tr>";
			
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