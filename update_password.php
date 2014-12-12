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

$password1= mysqli_real_escape_string($connect, $_POST['update']);


$sql = "UPDATE Users SET password='$password1' WHERE email='$email'";

if ($connect->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}


echo "success"+$password1;

mysqli_close($connect);
?>
