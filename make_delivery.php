<?php
$connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$cookie_name = "user";

date_default_timezone_set('America/New_York');

echo "<script>console.log('server')</script>";
        $cookie_value = $_COOKIE[$cookie_name];
        $cookie_value_arr = explode(" ", $cookie_value);
        $email = $cookie_value_arr[0];
        $timedate = date("g:i a");

echo "<script>console.log('server2')</script>";
        $sql="INSERT INTO orders (deliverer_email, time_accepted) VALUES ('$email', '$timedate')";

        if (!mysqli_query($connect,$sql)) {
                die('Error: ' . mysqli_error($connect));
        }

mysqli_close($connect);
?>