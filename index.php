<?php

$api = "bot786840940:AAHJXBvvXqAtE8Qp0xDHc5zlm924Kmbwh4E";

$update = file_get_contents("php://input");
$update = json_decode($update, true);

$message = $update['message']['text'];
$chatid = $update['message']['chat']['id'];

function sendMessage($chatid, $text)
{
global $api;
$url = "https://api.telegram.org/$api/sendMessage?chat_id=".$chatid."&text=".urlencode($text);
$get = file_get_contents($url);
}

$x = true;

switch($message)
{
  case "/start":
    $GLOBALS['x'] = true;
    sendMessage ($chatid, "Tra 10 minuti cominciano i giochi");
    sleep(10);
    sendMessage ($chatid, "Cominciano i giochi!");
    sleep(5);
    sendMessage ($chatid, "Parola: C_ _ _ _ _ O"); 
    break;
    
  case "Cavallo":
    if ($GLOBALS['x']) {
    sendMessage ($chatid, "Hai indovinato!");
    $GLOBALS['x'] = false;
    }
    break;
    
  default:
    if ($GLOBALS['x']) {
    sendMessage ($chatid, "Hai sbagliato!");
    } else {
    sendMessage ($chatid, "Basta inviare messaggi!");
    }
}
ob_flush();
flush();

if ($GLOBALS['x']) {
sleep(1);
goto indizio1;
sleep(1);
goto indizio2;
}

indizio1:
sendMessage ($chatid, "Primo suggerimento");
indizio2:
sendMessage ($chatid, "Secondo suggerimento");

?>
