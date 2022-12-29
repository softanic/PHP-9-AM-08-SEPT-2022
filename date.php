<?php
 date_default_timezone_set("Asia/kolkata");

$dob='19-09-2001';

echo date('dS F Y - l',strtotime($dob))."<br>";



echo date('Y')."<br>";
echo date('y')."<br>";
echo "<hr>";
echo date('m')."<br>";
echo date('M')."<br>";
echo date('F')."<br>";
echo date('t')."<br>";

echo "<hr>";
echo date('D')."<br>";
echo date('dS')."<br>";
echo date('l')."<br>";
echo date('W')."<br>";
echo date('j')." single digit date<br>";
echo date('z')."<br>";

echo "<hr>";

echo date('H')."<br>";
echo date('h')."<br>";

echo date('i')."<br>";
echo date('s')."<br>";

echo date('a')."<br>";
echo date('A')."<br>";

echo date('o')."<br>";



?>