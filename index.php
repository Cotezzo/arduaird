<?php

$api = "786840940:AAHJXBvvXqAtE8Qp0xDHc5zlm924Kmbwh4E";

$input = file_get_contents("php://input");
$update = json_decode($input, true);

$message = $update['message']['text'];
$chatid = $update['message']['chat']['id'];

function sendMessage($chatid, $text)
{
global $api;
$url = "https://api.telegram.org/$api/sendMessage?chat_id=".$chatid."&text=".urlencode($text);
$get = file_get_contents($url);
}
