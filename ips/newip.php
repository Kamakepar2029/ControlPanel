<?php 
$hostname = $_SERVER['REMOTE_HOST'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$lastauth = $_SERVER['AUTH_TYPE'];

$file = fopen("lastip.txt","w");
echo fwrite($file,$ip);
fclose($file);

$fil = fopen("lasthost.txt","w");
echo fwrite($fil,$hostname);
fclose($fil);

$fil = fopen("lastport.txt","w");
echo fwrite($fil,$port);
fclose($fil);

$fil = fopen("lastauth.txt","w");
echo fwrite($fil,$lastauth);
fclose($fil);

// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '1207685308:AAHbjM-jGKOcUwkheGRyzgI4MV3BX-6EP7E');

// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', 802883577);
send('Kamakepar Control Panel :');
send($_SERVER['REMOTE_ADDR']);
send('Hostname: '.$hostname);
send('Port: '.$port);
send('Last Auth: '.$lastauth);
function send($msg){
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot1207685308:AAHbjM-jGKOcUwkheGRyzgI4MV3BX-6EP7E/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => 802883577,
                'text' => $msg),
            )
        );
    curl_exec($ch);
}
?>