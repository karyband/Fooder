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


$email2=$row['email'];
$query2 = "SELECT * FROM Users WHERE email = '$email2'";
        $result2= mysqli_query($connect, $query2);


$get_rows2= mysqli_num_rows($result2);


if($get_rows2>=1){

       while($row2=mysqli_fetch_array($result2)){
	echo "<b>Phone number:</b> ".$row2['phone'];
}
echo "<br>Finished with the Delivery?: <input type='button' value='Delete'  onclick='delete1()'>";
}
}
}

else{
echo "You have no current order";
}
mysqli_close($connect);
?>

