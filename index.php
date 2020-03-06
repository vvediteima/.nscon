<?php
$token = '141552c74b88c81395f0fe00a993b77a847d4359f0f64b141965208ce14c52d06f84a4dc583ac7c2565fe';
$request_params = array(
'message' => "admin hello",
'user_id' => "345283375",
'access_token' => $token,
'v' => '5.0'
);
    
$get_params = http_build_query($request_params);
file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);
?>
