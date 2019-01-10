<?php

$api = "bot786840940:AAHJXBvvXqAtE8Qp0xDHc5zlm924Kmbwh4E";

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


if($message == "/start") {
$scrivi = true;
sendMessage ($chatid, "Tra 10 minuti
cominciano i giochi");
sleep(600);
sendMessage ($chatid, "Cominciano i giochi!");
sleep(5);
sendMessage ($chatid, "Parola: C_ _ _ _ _ O");
} elseif ($message == "Cavallo") {
if($scrivi) {
$scrivi = false;
sendMessage ($chatid, "Indovinato!");
}} elseif ($scrivi) {
if($scrivi) {
sendMessage ($chatid, "Sbagliato!");
}}

# Non sono sicuro funzioni, ma il session_write_close() dovrebbe permettere al resto del codice di andare nonostante lo sleep, in modo da permettere ai suggerimenti di attivarsi dopo tot tempo. Da testare.

if ($scrivi) {
session_write_close();
sleep(60)
If ($scrivi) {
goto indizio1;
}
session_write_close();
sleep(60);
If ($scrivi) {
goto indizio2;

# Eccetera eccetera, in base a quanti indizi vuoi mettere.

}}

indizio1:
sendMessage ($chatid, "Primo suggerimento");

indizio2:
sendMessage ($chatid, "Secondo suggerimento")
