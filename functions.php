<?php
function welcome(&$n)
{
	//local scope
	$n='xyz';
	echo "welcome $n to softanic<br>";
}
//global scope
$name="abc";
welcome($name);
echo $name;
?>