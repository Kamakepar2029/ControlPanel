<?php 
$hostname = $_SERVER['REMOTE_HOST'];
$ip = $_SERVER['REMOTE_ADDR'];
$file = fopen("lastip.txt","w");
echo fwrite($file,$ip);
fclose($file);

$fil = fopen("lasthost.txt","w");
echo fwrite($fil,$hostname);
fclose($fil);
?>