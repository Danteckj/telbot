<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

echo "Hi, idiots!";
$botini = file (__DIR__ . '/botini.txt');
$botname = trim($botini[0]);
$bottoken =trim ($botini[1]);
$telegramApiWebsite = "http://api.telegram.org/bot" . $bottoken;


$update = file_get_contents($telegramApiWebsite ."/getupdates");

print_r($update);

$paramsForTestResponce = [
    'chat_id' =>$_POST['chat_id'],
    'text' =>'Получилось',
    //253834733
    //178147309
    //164429217
    ];

$testResponce = $telegramApiWebsite . '/sendMessage?' .http_build_query($paramsForTestResponce);
file_get_contents($testResponce);
var_dump(expression)

?>