<?php
function demo(&$a)
{
	$a=22;
	echo $a."<br>";
}

$x=20;
demo($x);
echo $x;
?>