<?php
        $connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$cookie_name = "user";
$cookie_value = $_COOKIE[$cookie_name];
$cookie_value_arr = explode(" ", $cookie_value);
$email = $cookie_value_arr[0];

$npassword = mysqli_real_escape_string($connect, $_POST['newpassword']);

$query = mysql_query("UPDATE Users SET password=$npassword WHERE email = $email");
        $result = mysqli_query($connect, $query);

echo "success";

mysqli_close($connect);
?>