<?php
header("Content-type: application/json");
header("Access-Control-Allow_Method: GET");

$url="http://api.serri.codefactory.live/random/";
$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
curl_close($client);

echo $response;