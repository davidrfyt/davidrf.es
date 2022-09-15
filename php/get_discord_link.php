<?php

$configServer = [
  "serverID" => 000000000000000000 // ID de tu Discord.
];

$apiDiscord = "https://discordapp.com/api/servers/".$configServer["serverID"]."/embed.json";

$getDataFromApi = @file_get_contents($apiDiscord);

$json = json_decode($getDataFromApi);

if ($json->instant_invite != ""){
  header("Location: " . $json->instant_invite);
} else {
  header("Content-Type: text/json");
  echo json_encode(array("message" => "Error al obtener el link de invitación."));
}

?>