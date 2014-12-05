<?php
$connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo "<html><head><title>Fooder</title><link href='http://fonts.googleapis.com/css?family=Lemon' rel='stylesheet' type='text/css'><link rel='stylesheet' type='text/css' href='../abc/mystyle.css'><link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'><script src='http://code.jquery.com/jquery-1.11.1.min.js'></script></head><body>";

$firstname = mysqli_real_escape_string($connect,$_POST['first_name']);
$lastname = mysqli_real_escape_string($connect, $_POST['last_name']);
$myemail = mysqli_real_escape_string($connect, $_POST['my_email']);
$myphone =mysqli_real_escape_string($connect, $_POST['my_phone']);
$password=mysqli_real_escape_string($connect, $_POST['my_password']);
$address1=mysqli_real_escape_string($connect, $_POST['address_1']);
$address2=mysqli_real_escape_string($connect, $_POST['address_2']);

$query = "SELECT * FROM Users WHERE email = '$myemail'";
$result = mysqli_query($connect, $query);

$get_rows = mysqli_num_rows($result);
if($get_rows < 1) {
        $sql="INSERT INTO Users (firstName, lastName, email, phone, password,addressline1, addressline2)
        VALUES ('$firstname', '$lastname', '$myemail', '$myphone', '$password', '$address1', '$address2')";

        if (!mysqli_query($connect,$sql)) {
                die('Error: ' . mysqli_error($connect));
        }
        echo "<center><br>";
        echo "<h3> Welcome, $firstname $lastname you have just signed up with Fooder!</h3>";
        echo "<input type=button onClick=\"parent.location='../abc'\" value='Continue'>";
        echo "</center>";

        mysqli_close($connect);

} else {
        echo "<center><br>";
        echo "<h3>This email has already been used! Please use a different one.</h3>";
        echo "<input type=button onClick=\"parent.location='../abc/signup.html'\" value='Continue'>";
        echo "</center>";
echo "</body></html>";
        mysqli_close($connect);
}
?>