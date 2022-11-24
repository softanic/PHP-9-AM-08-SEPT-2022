<?php
function check($no)
{
	if($no>10)
	{
		throw new Exception('customer error msg'); 
	}
	else{
		echo "ok";
		return true;
	}
}

try{
	check(11);
}

catch(Exception $e)
{
	echo $e->getFile();
}

?>