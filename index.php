<?php

$api = "bot786840940:AAHJXBvvXqAtE8Qp0xDHc5zlm924Kmbwh4E";

$input = file_get_contents("php://input");
$update = json_decode($input, false);

$message = $update['message']['text'];
$chatid = $update['message']['chat']['id'];

function sendMessage($chatid, $text)
{
global $api;
$url = "https://api.telegram.org/$api/sendMessage?chat_id=".$chatid."&text=".urlencode($text);
$get = file_get_contents($url);
}

if($message == "/start") {
ob_flush();
flush();
$scrivi = true;
sendMessage ($chatid, "Tra 10 minuti cominciano i giochi");
sleep(10);
sendMessage ($chatid, "Cominciano i giochi!");
sleep(5);
sendMessage ($chatid, "Parola: C_ _ _ _ _ O"); 
}elseif ($message == "Cavallo") {
ob_flush();
flush();
if($scrivi) {
$scrivi = false;
sendMessage ($chatid, "Indovinato!");
}} elseif ($scrivi) {
ob_flush();
flush();
if($scrivi) {
sendMessage ($chatid, "Sbagliato!");

}}
if ($scrivi) {
sleep(10);
if ($scrivi) {
goto indizio1;
}
sleep(10);
if ($scrivi) {
goto indizio2;

}}
indizio1:
sendMessage ($chatid, "Primo suggerimento");
indizio2:
sendMessage ($chatid, "Secondo suggerimento");

?>
