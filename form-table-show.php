<?php
$no=$_REQUEST['number'];
/*for($i=1;$i<=10;$i++)
	echo $i*$no ."<br>";

*/
/*if($no==strrev($no))
{
	echo 'no is palindrom';
}else{
	echo 'not palindrom';
}*/

echo $no==strrev($no) ? 'palindrom' : 'not palindrom';

?>