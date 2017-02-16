<?php
$access_token = '9zACmSmUfGmcNZjxWDee9M32n3hSGsMVA8CNBP/iLTVRhxb/TEA0zaTXqYUhsTh1DUPgF5X0m/1VDBtphKkjWbELi+yNFmB5S1YqtOwPZKjhByhQpbpHKt8STIvUyLgg4vzqIUkDc7robdBjqx7xTwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
