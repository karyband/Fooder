#!/usr/bin/php
<?php
$connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$email = mysqli_real_escape_string($connect, $_POST['login']);
$password =mysqli_real_escape_string($connect, $_POST['password']);


$query = "SELECT * FROM Users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($connect, $query);

$get_rows = mysqli_num_rows($result);

if($get_rows < 1) {

        $arr = array('check' => 'false');
        header('Content-Type: application/json');
        echo  json_encode($arr);

} else {

//      $first_name = mysql_get_var("SELECT firstName from Users where email =". '$email');
        $session_id = "1";
        $cookie_name = "user";
        $sep = " ";
        $cookie_value = $email . $sep . $session_id;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        $arr = array('check' => 'true');
        header('Content-Type: application/json');


        echo json_encode($arr);



   mysqli_close($connect);
}
?>
