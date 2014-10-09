<?php
$connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$firstname = mysqli_real_escape_string($connect,$_POST['first_name']);
$lastname = mysqli_real_escape_string($connect, $_POST['last_name']);
$myemail = mysqli_real_escape_string($connect, $_POST['my_email']);
$myphone =mysqli_real_escape_string($connect, $_POST['my_phone']);

$sql="INSERT INTO Users (firstName, lastName, email, phone)
VALUES ('$firstname', '$lastname', '$myemail', '$myphone')";

if (!mysqli_query($connect,$sql)) {
  die('Error: ' . mysqli_error($connect));
}

echo "<center>";
echo "<h1>You have just signed up with Fooder!</h1>";
echo "<input type=button onClick=\"parent.location='home.html'\" value='Continue'>";
echo "</center>";

mysqli_close($connect);
?>