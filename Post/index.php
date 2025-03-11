<?php
$url = 'https://bulksmsdhaka.com/api/sendtext'; // API URL
$apiKey = 'f205b5c01XXXXXXXXXXXXXXXX'; //Your API Key
$callerID='1234'; //Your Caller id is 1234(Non Masking) and (Brand Name) Masking
$receiver = '01941XXXXXX'; //Your receiver phone number
$message = 'আমার সোনার বাংলা আমি তোমায় ভালোবাসি'; //Your Message content

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array("apikey"=>"$apiKey","number" => "$receiver","message" => "$message", "callerID"=> "$callerID");
$postdata = json_encode($data);


// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// Execute the POST request
$result = curl_exec($ch);

curl_close($ch);

var_dump($result);