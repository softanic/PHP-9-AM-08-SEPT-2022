<?php
$m=[10,15,13,14,16];
sort($m);
rsort($m);
$mm=['java'=>15,'php'=>16,'css'=>14,'js'=>24];
asort($mm);
arsort($mm);
ksort($mm);
krsort($mm);

array_push($m,25);
array_push($m,26);
array_pop($m);
array_pop($m);
array_pop($m);
$m1=[100,200,300,400];
$m=array_merge($m,$m1);
/*echo "<pre>";
print_r($m);
//echo array_sum($m);
echo implode('a',$m);
$str="a,b,c,d,e,f,h,i";
$arr=explode('d',$str);
var_dump($arr);
*/
echo in_array(2000,$m);
echo key_exists('javaaa',$mm);
?>