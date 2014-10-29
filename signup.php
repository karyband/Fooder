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
$password=mysqli_real_escape_string($connect, $_POST['my_password']);

$query = "SELECT * FROM Users WHERE email = '$myemail'";
$result = mysqli_query($connect, $query);

$get_rows = mysqli_num_rows($result);
if($get_rows < 1) {
        $sql="INSERT INTO Users (firstName, lastName, email, phone, password)
        VALUES ('$firstname', '$lastname', '$myemail', '$myphone', '$password')";

        if (!mysqli_query($connect,$sql)) {
                die('Error: ' . mysqli_error($connect));
        }
        echo "<center>";
        echo "<h1> Welcome, $firstname $lastname you have just signed up with Fooder!</h1>";
        echo "<input type=button onClick=\"parent.location='../index.html'\" value='Continue'>";
        echo "</center>";

        mysqli_close($connect);

} else {
        echo "<center>";
        echo "<h1>This email has already been used! Please use a different one.</h1>";
        echo "<input type=button onClick=\"parent.location='../index.html'\" value='Continue'>";
        echo "</center>";

        mysqli_close($connect);
}
?>