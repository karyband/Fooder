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

$query = "SELECT * FROM orders WHERE deliverer_email = '$email'";
        $result = mysqli_query($connect, $query);


$get_rows = mysqli_num_rows($result);


if($get_rows>=1){

       while($row=mysqli_fetch_array($result)){
        echo "<p><b>User:</b> <span id='email2'>".$row['email']."</span> <b>Time Ordered:</b> ".$row['time_ordered']." <b>Restaurant:</b> ".$row['restname']."<br><b>Items ordered:</b> ".$row['items_ordered']."</p>";
echo "<input type='button' value='Delete'  onclick='delete1()'>";


}
}

else{
echo "You have no current order";
}
mysqli_close($connect);
?>