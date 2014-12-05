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

$sql = "DELETE FROM orders WHERE email = '$email'";


if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connect->error;
}
mysqli_close($connect);
?>