<?php
$access_token = 'yF0s0aFya6qS2OYg/S11y1XbPDGdw1k39rNATaTTIFdbQUAvFSaBb6VUfhpQXbsdE9Gp8vS5PRVRhLIq1nty2Drnt8h89205wnpR4BTKhpc14/hN8AIdWX0GjE20LVwRi2ANNy9kQvjc1QGXsWFkqAdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;