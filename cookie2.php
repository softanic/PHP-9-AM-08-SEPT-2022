<?php
//echo "cookie2.php";
echo $_COOKIE['user_id'];
setcookie('user_id','',time()-10);
?>