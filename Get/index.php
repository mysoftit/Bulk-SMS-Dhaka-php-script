<?php
$apiKey = 'f205b5c01XXXXXXXXXXXXXXXX'; //Your API Key
$callerID='1234'; //Your Caller id is 1234(Non Masking) and (Brand Name) Masking
$receiver = '01941XXXXXX'; //Your receiver phone number
$message = 'আমার সোনার বাংলা আমি তোমায় ভালোবাসি'; //Your Message content

$data=sendBulkSMS($apiKey, $callerID, $receiver, $message);

print_r($data);

function sendBulkSMS($apiKey,$callerID, $receiver, $message)
{
    $message = $message;

    $url = "https://bulksmsdhaka.com/api/sendtext?apikey=$apiKey&callerID=$callerID&number=$receiver&message=$message";

    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
    $response = curl_exec($c);
    return $response;
}
?>
