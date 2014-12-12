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


date_default_timezone_set('America/New_York');

echo "<script>console.log('server')</script>";
        $cookie_value = $_COOKIE[$cookie_name];
        $cookie_value_arr = explode(" ", $cookie_value);
        $email = $cookie_value_arr[0];
        $timedate = date("g:i a");

//$o='test@test.com';
$id = mysqli_real_escape_string($connect, $_POST['order1']);

$sql = "UPDATE orders SET deliverer_email='$email', time_accepted='$timedate' WHERE id='$id'";

if ($connect->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

		
mysqli_close($connect);
?>
