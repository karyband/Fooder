<?php
        $connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*
$cookie_name = "user";
$cookie_value = $_COOKIE[$cookie_name];
$cookie_value_arr = explode(" ", $cookie_value);
$email = $cookie_value_arr[0];
*/
$query = "SELECT * FROM orders";
        $result = mysqli_query($connect, $query);

//echo "<script>console.log('2')</script>";
$get_rows = mysqli_num_rows($result);


if($get_rows>=1){
echo "<form name='deliverform' method='post' onsubmit='submitdelivery()'>";
        while($row=mysqli_fetch_array($result)){
	$email=$row['email'];
	$idcode = $row['id'];
echo "<p><input type='radio' name='deliver' id='$idcode' value='$email'><b>User:</b> ".$row['email']." <b>Time Ordered:</b> ".$row['time_ordered']." <b>Restaurant:</b> ".$row['restname']."<br><b>Items ordered:</b> ".$row['items_ordered']."<br><b>Total price: $</b>".$row['total']."</p>";
	
 	//echo "<p style='clear:both' class='items'><br>Menu Here</p>";
        //echo "<form name='menuform' method='post' onsubmit='submitorder()'><p style = 'clear:both' class = 'items'><br><b>Menu</b></p>";

	}
echo "<input type='submit' value='Submit'></form>";
}






mysqli_close($connect);
?>
