<?php

require './vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'hello-world';
$payload = [
    'sub' => '1234567890',
    'name' => 'Bruno',
    'role' => 'Developer'
];

$token = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($token, new Key($key, 'HS256'));

echo '<pre>';
print_r($decoded);
echo '</pre>';