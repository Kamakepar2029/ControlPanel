<?php
header('Content-type: text/html');
header('Access-Control-Allow-Origin: *');
$num = file_get_contents('number.txt');
$numbs = (int)$num;
$file = fopen("number.txt","w");
echo fwrite($file,$numbs+1);
fclose($file);
?>