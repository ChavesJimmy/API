
<?php

$cityKey = 31868;
$apiKey = 'vvdxJ9TUBYMoSACFuRjGXNGSNMOtRPPD';
$url = "http://dataservice.accuweather.com/currentconditions/v1/$cityKey?apikey=$apiKey&language=en-gb&details=true";

$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
curl_close($client);

echo $response;
