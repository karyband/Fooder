<?php
$connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo "<script>console.log('first')</script>";
$cookie_name = "user";

date_default_timezone_set('America/New_York');

echo "<script>console.log('server')</script>";
        $cookie_value = $_COOKIE[$cookie_name];
        $cookie_value_arr = explode(" ", $cookie_value);
        $email = $cookie_value_arr[0];
        $timedate = date("g:i a");

        $restname= mysqli_real_escape_string($connect, $_POST['name1']);
        $items=mysqli_real_escape_string($connect, $_POST['food']);
        $total_price=mysqli_real_escape_string($connect, $_POST['total']);

echo "<script>console.log('server2')</script>";
        $sql="INSERT INTO orders (email, time_ordered, restname, items_ordered, total)
        VALUES ('$email', '$timedate', '$restname', '$items','$total_price')";

        if (!mysqli_query($connect,$sql)) {
                die('Error: ' . mysqli_error($connect));
        }
//}
mysqli_close($connect);
?>