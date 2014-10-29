<?php
$cookie_name = "user"
//unset($_COOKIE[$cookie_name]);
$cookie_value = "BLANK";
setcookie($cookie_name, $cookie_value, time() - 3600, "/");

$arr = array('check' => 'true');
header('Content-Type: application/json');


        echo json_encode($arr);
?>