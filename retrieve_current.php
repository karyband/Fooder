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

$query = "SELECT * FROM orders WHERE email = '$email'";
        $result = mysqli_query($connect, $query);


$get_rows = mysqli_num_rows($result);


if($get_rows>=1){

       while($row=mysqli_fetch_array($result)){
        echo "<p><span id='email' style='display:none'>".$row['email']."</span><b>Time ordered: </b>".$row['time_ordered']."<br><b>Restaurant: </b><span id='restname'>".$row['restname']."</span><br><b>Items Ordered: </b>".$row['items_ordered']."<br><b>Total price: </b>$".$row['total']."</p>";
        if($row['time_accepted']) {
           echo "<p><b>Status:</b> Accepted<br>At".$row['time_accepted'];
        } else {
           echo "<p><b>Status:</b> </p>";
        }
}
echo "<input type='button' value='Redo' onclick='redo()'>   <input type='button' value='Delete'  onclick='delete1()'>";




}

else{
echo "You have no current order";
}
mysqli_close($connect);
?>